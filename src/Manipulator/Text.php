<?php

namespace RudyMas\Manipulator;

/**
 * Class Text (PHP version 7.1)
 * PHP class to manipulate text
 *
 * @author      Rudy Mas <rudy.mas@rmsoft.be>
 * @copyright   2016-2017, rmsoft.be. (http://www.rmsoft.be/)
 * @license     https://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @version     0.3.0
 * @package     RudyMas\Manipulator
 */
class Text
{
    /**
     * @param int $numberOfCharacters The number of characters I want
     * @return string
     */
    public function randomText(int $numberOfCharacters): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($x = 0; $x < $numberOfCharacters; $x++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    /**
     * @param string $input Text that has to be processed
     * @return string
     */
    public function cleanHTML(string $input): string
    {
        return htmlentities($input, ENT_HTML5, 'UTF-8');
    }

    /**
     * @param string $input Text that has to be processed
     * @return string
     */
    public function uncleanHTML(string $input): string
    {
        return html_entity_decode($input, ENT_HTML5, 'UTF-8');
    }

    /**
     * @param string $input URL that has to be processed
     * @return string
     */
    public function cleanURL(string $input): string
    {
        $input = str_replace('/', '__', $input);
        return rawurlencode($input);
    }

    /**
     * @param string $input
     * @return string
     */
    public function cleanURLUTF8(string $input): string
    {
        $input = str_replace('/', '__', $input);
        return rawurlencode(utf8_encode($input));
    }

    /**
     * @param string $input
     * @return string
     */
    public function uncleanURL(string $input): string
    {
        $input = str_replace('__', '/', $input);
        return rawurldecode($input);
    }
}

/** End of File: Text.php **/