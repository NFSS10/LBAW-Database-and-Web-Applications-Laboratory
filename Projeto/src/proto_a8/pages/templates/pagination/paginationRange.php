<?php

    if($page_index == 1 || $page_index == 2)
    {
        $page_lower = 1;
        $page_upper = min($pageNo, 5);
    }
    else if($page_index == $pageNo || $page_index == ($pageNo - 1))
    {
        $page_lower = max(1, $pageNo - 4);
        $page_upper = $pageNo;
    }
    else
    {
        $page_lower = $page_index - 2;
        $page_upper = $page_index + 2;
    }