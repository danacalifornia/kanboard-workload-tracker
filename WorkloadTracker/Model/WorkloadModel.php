<?php

namespace Kanboard\Plugin\WorkloadTracker\Model;

use Kanboard\Core\Base;

class WorkloadModel extends Base
{
    public function getTeamWorkload()
    {
        $users = $this->db->table('users')->eq('is_active', 1)->findAll();
        $workloadData = array();

        foreach ($users as $user) {
            $tasks = $this->db->table('tasks')
                ->eq('owner_id', $user['id'])
                ->eq('is_active', 1)
                ->findAll();

            $totalHours = 0;
            foreach ($tasks as $task) {
                $totalHours += (float) ($task['time_estimated'] ?: 0);
            }

            $capacity = 40; // Default 40 hours per week
            $utilization = $capacity > 0 ? ($totalHours / $capacity) * 100 : 0;

            if ($utilization >= 100) $status = 'overloaded';
            elseif ($utilization >= 80) $status = 'high';
            elseif ($utilization >= 60) $status = 'optimal';
            else $status = 'underutilized';

            $workloadData[] = array(
                'id' => $user['id'],
                'name' => $user['name'] ?: $user['username'],
                'capacity' => $capacity,
                'assigned_hours' => $totalHours,
                'utilization' => $utilization,
                'status' => $status,
                'task_count' => count($tasks)
            );
        }

        return $workloadData;
    }
}
