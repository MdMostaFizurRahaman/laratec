<?php

use App\Models\FeatureSection;

function getFeatureSection()
{
    return FeatureSection::first() ?? [];
}

function getFeatureSectionImage()
{
    if(!empty(getSettings())){
        return getFeatureSection()->getFirstMediaUrl('general');
    }else{
        return null;
    }
}
