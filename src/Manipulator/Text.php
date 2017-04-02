<?php

namespace RudyMas\Manipulator;

/**
 * Class Text
 * PHP class to manipulate text
 *
 * @author      Rudy Mas <rudy.mas@rmsoft.be>
 * @copyright   2016-2017, rmsoft.be. (http://www.rmsoft.be/)
 * @license     https://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @version     0.2.0
 * @package     RudyMas\Manipulator
 */
class Text
{
    /**
     * function randomText($numberOfCharacters)
     *
     * @param int $numberOfCharacters The number of characters I want
     * @return string
     */
    public function randomText($numberOfCharacters)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($x = 0; $x < $numberOfCharacters; $x++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    /**
     * function cleanHTML($input)
     *
     * @param string $input Text that has to be processed
     * @return string
     */
    public function cleanHTML($input)
    {
        return htmlentities($input, ENT_HTML5, 'UTF-8');
    }

    /**
     * function uncleanHTML($input)
     *
     * @param string $input Text that has to be processed
     * @return string
     */
    public function uncleanHTML($input)
    {
        return html_entity_decode($input, ENT_HTML5, 'UTF-8');
    }

    /**
     * function cleanURL($input)
     *
     * @param string $input URL that has to be processed
     * @return string
     */
    public function cleanURL($input)
    {
        return rawurlencode($input);
    }

    /**
     * function cleanURLUTF8($input)
     *
     * @param string $input
     * @return string
     */
    public function cleanURLUTF8($input)
    {
        return rawurldecode(utf8_encode($input));
    }
}
/** End of File: Text.php **/