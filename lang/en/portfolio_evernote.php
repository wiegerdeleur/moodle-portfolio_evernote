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
 * Strings for evernote portfolio
 *
 * @package    portfolio
 * @subpackage evernote
 * @copyright  2013 Vishal Raheja
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['consumerkey'] = 'Consumer Key';
$string['noauthtoken'] = 'An authentication token has not been recieved from Evernote. Please ensure you are allowing the application to access your Evernote account';
$string['nooauthcredentials'] = 'OAuth credentials (Evernote API Consumer key and Secret) required.';
$string['nooauthcredentials_help'] = 'To use the Evernote portfolio plugin you must configure OAuth credentials in the portfolio settings.';
$string['nosessiontoken'] = 'A session token does not exist preventing export to Evernote.';
$string['oauthinfo'] = '<p>To use this plugin, you must get an Evernote API key</p>';
$string['pluginname'] = 'Evernote';
$string['sendfailed'] = 'The file {$a} failed to transfer to Evernote';
$string['secret'] = 'Consumer Secret';
$string['improperkey'] = 'Wrong Evernote API Customer Key or Secret';
$string['failedtoken'] = 'Unable to get Token from the current Customer key and Secret';
$string['noauthfromuser'] = 'The Evernote user did not authorize the temporary credentials';
$string['tokencredentialsfailed'] = 'Failed to obtain token credentials.';
$string['errorcreatingnotebook'] = 'Error while creating notebook';
$string['customnotetitlelabel'] = 'Export Note Title';
$string['defaultnotetitle'] = 'Moodle Portfolio Export';
$string['errorlistingnotebook'] = 'Error while listing notebooks from your account';
$string['denotedefaultnotebook'] = '{$a} (Default)';
$string['encloseenmltags'] = '<?xml version="1.0" encoding="UTF-8"?>' .
            '<!DOCTYPE en-note SYSTEM "http://xml.evernote.com/pub/enml2.dtd">' .
            '<en-note>{$a}</en-note>';
$string['enclosebodytags'] = '<body>{$a}</body>';
$string['allowedtags'] = '<a><abbr><acronym><address><area><b><bdo><big><blockquote><br><caption>'.
            '<center><cite><code><col><colgroup><dd><del><dfn><div><dl><dt><em><font><h1><h2><h3><h4><h5><h6><hr><i><img><ins>'.
            '<kbd><li><map><ol><p><pre><q><s><samp><small><span><strike><strong><sub><sup><table><tbody><td><tfoot><th><thead>'.
            '<title><tr><tt><u><ul><var><xmp>';
