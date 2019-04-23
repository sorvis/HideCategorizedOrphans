<?php
/**
 * Hooks for HideCategorizedOrphans extension
 *
 * @file
 * @ingroup Extensions
 */

class HideCategorizedOrphansHooks {

        /**
         * Add condition to LonelyPagesQuery to hide pages in categories
         */
        public static function onLonelyPagesQuery( &$tables, &$conds, &$joinConds) {
                $joinConds['categorylinks'] = array(
                        'LEFT JOIN', array(
                                'cl_from = page_id'
                        )
                );

                $tables[] = 'categorylinks';

                $conds[] = 'cl_from is null';
                return true;
        }
}
