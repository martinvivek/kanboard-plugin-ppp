<?php

namespace Kanboard\Plugin\PPP\Schema;

use PDO;

const VERSION = 1;

function version_1(PDO $pdo)
{
    $pdo->exec('CREATE TABLE IF NOT EXISTS ppp_report (
        "id" SERIAL PRIMARY KEY,
        "project_id" INTEGER NOT NULL,
        "report" TEXT NOT NULL,
        "report_date" DATETIME NOT NULL,
        "recipients" TEXT,
        FOREIGN KEY(project_id) REFERENCES projects(id) ON DELETE CASCADE
    )');

    $pdo->exec('CREATE TABEL IF NOT EXISTS ppp_report_tasks (
        "id" SERIAL PRIMARY KEY,
        "ppp_report_id" INTEGER NOT NULL,
        "task_id" INTEGER NOT NULL,
        "task_status" VARCHAR(30),
        FOREIGN KEY(ppp_report_id) REFERENCES ppp_report(id) ON DELETE CASCADE,
        FOREIGN KEY(task_id) REFERENCES task(id) ON DELETE CASCADE
    )');
}
