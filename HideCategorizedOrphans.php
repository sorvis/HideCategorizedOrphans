<?php
/**
 * HideCategoizedOrphans extension
 *
 * For more info see https://mediawiki.org/wiki/Extension:HideCategorizedOrphans
 *
 * @file
 * @ingroup Extensions
 * @author Steven Orvis, 2014
 * @license GNU General Public Licence 2.0 or later
 */

$wgExtensionCredits['other'][] = array(
        'path' => __FILE__,
        'name' => 'HideCategorizedOrphans',
        'author' => array(
                'Steven Orvis',
        ),
        'version'  => '0.2.0',
        'url' => 'https://www.mediawiki.org/wiki/Extension:HideCategorizedOrphans',
        'descriptionmsg' => 'Hides orphaned pages that belong to a category',
);

/* Setup */

// Register files
$wgAutoloadClasses['HideCategorizedOrphansHooks'] = __DIR__ . '/HideCategorizedOrphans.hooks.php';

// Register hooks
$wgHooks['LonelyPagesQuery'][] = 'HideCategorizedOrphansHooks::onLonelyPagesQuery';
