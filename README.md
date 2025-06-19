markdown# Kanboard Workload Tracker Plugin

A working Kanboard plugin that displays team workload with visual indicators.

## Current Features ✅
- Team workload dashboard
- Color-coded status indicators (optimal, high, overloaded, underutilized)
- Progress bars showing capacity utilization
- Task count per user
- Responsive grid layout

## Working Demo
- Successfully tested in Docker Kanboard instance
- Shows users with their assigned hours vs 40h weekly capacity
- Updates when tasks are assigned/modified

## Files Structure
- `Plugin.php` - Main plugin registration
- `Controller/WorkloadController.php` - All workload logic
- `Template/workload/index.php` - Dashboard view
- `Assets/css/workload.css` - Styling
- `Schema/Mysql.php` - Database setup

## Next Enhancements
- Individual user capacity settings
- Export functionality
- AJAX refresh
- Historical tracking
- Advanced filtering

## Installation
1. Copy `WorkloadTracker` folder to Kanboard `plugins/` directory
2. Enable in Settings → Plugins
3. Access via "Team Workload" menu
