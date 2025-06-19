<?php

namespace Kanboard\Plugin\WorkloadTracker\Schema;

const VERSION = 1;

function version_1($pdo)
{
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS user_capacity (
            user_id INT NOT NULL,
            weekly_hours DECIMAL(5,2) NOT NULL DEFAULT 40.00,
            updated_at INT NOT NULL,
            PRIMARY KEY (user_id)
        )
    ");
}
EOF# Create the database schema file
cat > WorkloadTracker/Schema/Mysql.php << 'EOF'
<?php

namespace Kanboard\Plugin\WorkloadTracker\Schema;

const VERSION = 1;

function version_1($pdo)
{
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS user_capacity (
            user_id INT NOT NULL,
            weekly_hours DECIMAL(5,2) NOT NULL DEFAULT 40.00,
            updated_at INT NOT NULL,
            PRIMARY KEY (user_id)
        )
    ");
}
