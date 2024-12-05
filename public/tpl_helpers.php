<?php
function picture(string $name, string $alt = ''): string {
    $path = "./img/photo/";
    return <<<PIC
    <picture>
        <source media="(min-width: 2000px)" srcset="{$path}xl_{$name}.jpg 1x, {$path}xl_{$name}_2x.jpg 2x">
        <source media="(min-width: 1600px)" srcset="{$path}lg_{$name}.jpg 1x, {$path}lg_{$name}_2x.jpg 2x">
        <source media="(min-width: 1200px)" srcset="{$path}md_{$name}.jpg 1x, {$path}md_{$name}_2x.jpg 2x">
        <source media="(min-width: 800px)" srcset="{$path}sm_{$name}.jpg 1x, {$path}sm_{$name}_2x.jpg 2x">
        <source media="(min-width: 500px)" srcset="{$path}xs_{$name}.jpg 1x, {$path}xs_{$name}_2x.jpg 2x">
        <img src="{$path}xs_{$name}.jpg" alt="{$alt}">
    </picture>
PIC;
}