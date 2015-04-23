<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * JWplayer filter
 *
 * @package    filter
 * @subpackage jwplayer
 * @copyright  2014 Ruslan Kabalin, Lancaster University, Johannes Burk <me@jojoob.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2015042302;
$plugin->requires  = 2013111800; // moodle 2.6.0
$plugin->component = 'filter_jwplayer';
$plugin->maturity = MATURITY_STABLE;
$plugin->release   = 'JW Player multimedia filter Version 0.2.0 (fork by jojoob, Build: 2015042302) for Moodle 2.6+';

$plugin->dependencies = array(
    'local_jwplayer' => 2015042301,
);
