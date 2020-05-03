<?php

namespace RudyMas\Manipulator;

/**
 * Class BBCode (PHP version 7.1)
 * PHP class to translate BBCode to HTML
 *
 * @author      Rudy Mas <rudy.mas@rmsoft.be>
 * @copyright   2018, rmsoft.be (http://www.rmsoft.be/)
 * @license     https://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @version     0.0.2.2
 * @package     RudyMas\Manipulator
 */
class BBCode
{
    private $pattern = [
        '#\[b\](.*?)\[/b\]#si',
        '#\[i\](.*?)\[/i\]#si',
        '#\[u\](.*?)\[/u\]#si',
        '#\[strike\](.*?)\[/strike\]#si',
        '#\[quote\](.*?)\[/quote\]#si',
        '#\[quote=(.*?)\](.*?)\[/quote\]#si',
        '#\[code\](.*?)\[/code\]#si',
        '#\[url\]([a-z]+?://){1}(.*?)\[/url\]#si',
        '#\[url\](.*?)\[/url\]#si',
        '#\[url=([a-z]+?://){1}(.*?)\](.*?)\[/url\]#si',
        '#\[url=(.*?)\](.*?)\[/url\]#si',
        '#\[email\](.*?)\[/email\]#si',
        '#\[email=(.*?){1}(.*?)\](.*?)\[/email\]#si',
        '#\[\*\](.*?)#si',
        '#\[list\](.*?)\[/list\]#si',
        '#\[list=(.*?)\](.*?)\[/list\]#si',
        '#\[img\](.*?)\[/img\]#si',
        '#\[img=(.*?)x(.*?)\](.*?)\[/img\]#si',
        '#\[img=w(.*?)\](.*?)\[/img\]#si',
        '#\[img=h(.*?)\](.*?)\[/img\]#si'
    ];
    private $replace = [
        '<b>$1</b>',
        '<i>$1</i>',
        '<u>$1</u>',
        '<del>$1</del>',
        '<blockquote>quote:<hr>$1<hr></blockquote>',
        '<blockquote cite="$1">quote:<hr>$2<hr></blockquote>',
        '<blockquote">code:<hr><code>$1</code><hr></blockquote>',
        '<a href="$1$2" target="_blank">$1$2</a>',
        '<a href="http://$1" target="_blank">$1</a>',
        '<a href="$1$2" target="_blank">$3</a>',
        '<a href="http://$1" target="_blank">$2</a>',
        '<a href="mailto:$1">$1</a>',
        '<a href="mailto:$1$2">$3</a>',
        '<li>$1</li>',
        '<ul>$1</ul>',
        '<ol type="$1">$2</ol>',
        '<img src="$1">',
        '<img width="$1" height="$2" src="$3">',
        '<img width="$1" src="$2">',
        '<img height="$1" src="$2">',
    ];

    /**
     * Process text -> convert BBCode to HTML
     *
     * @param string $text
     * @return string
     */
    public function processText(string $text): string
    {
        $text = str_replace("<br>", "", $text);
        $text = str_replace("<br/>", "", $text);
        $text = str_replace("<br />", "", $text);
        $text = str_replace("\r", "<br>", $text);
        $text = str_replace("\t", "&nbsp; &nbsp; &nbsp;", $text);

        return preg_replace($this->pattern, $this->replace, $text);
    }
}