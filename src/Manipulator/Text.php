<?php
namespace RudyMas\Manipulator;

/**
 * Text - PHP class to manipulate text
 *
 * @author      Rudy Mas <rudy.mas@rudymas.be>
 * @copyright   2016, rudymas.be. (http://www.rudymas.be/)
 * @license     https://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @version     0.1.0
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
        return nl2br(htmlentities($input, ENT_QUOTES));
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