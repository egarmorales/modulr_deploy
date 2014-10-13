<?php

// // Init vars
// $LOCAL_ROOT         = "http://www.alfredobarron.com";
// $LOCAL_REPO_NAME    = "prueba";
// $LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
// $REMOTE_REPO        = "git@github.com:egarmorales/modulr.git";
// $DESIRED_BRANCH     = "dev";

// // Delete local repo if it exists
// if (file_exists($LOCAL_REPO)) {
// 	shell_exec("rm -rf {$LOCAL_REPO}");
// }

// // Clone fresh repo from github using desired local repo name and checkout the desired branch
// echo shell_exec("cd {$LOCAL_ROOT} && git clone {$REMOTE_REPO} {$LOCAL_REPO_NAME} && cd {$LOCAL_REPO} && git checkout {$BRANCH}");

// die("done " . mktime());


echo shell_exec("http://www.alfredobarron.com/prueba pull 2>&1");