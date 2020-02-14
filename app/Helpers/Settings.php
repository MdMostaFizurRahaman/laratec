<?php

use App\Models\Settings;

function getSettings()
{
    return Settings::first() ?? [];
}

function logo()
{
    if(!empty(getSettings())){
        return getSettings()->getFirstMediaUrl('settings');
    }
    else{
        return "theme/images/home/home1/logo.png";
    }
}
