<?php

namespace Settings;

function settings(array $settings = []): Settings
{
    return new Settings($settings);
}