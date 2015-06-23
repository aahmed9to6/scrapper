<?php 
/**
 *  @author     Abdullah A
 *  @email      abdullah.a@allshoreresources.com
 *  @project    Web Scrapper
 *  @version    1.0
 *  @copyright  2015
 */
    if(isset($_POST['url'])) {
        $target = $_POST['url'];
        //Functions
        //parse_array($search_results['FILE'], '<a', '/a>', INCL); returns array of criteria
        //get_attribute($record, $attribute="href");
        //remove($search_results['FILE'], '<script', '</script>');
        // Initialization
        include($_SERVER['DOCUMENT_ROOT'] . "/libraries/LIB_parse.php");
        include($_SERVER['DOCUMENT_ROOT'] . "/libraries/LIB_http.php");
        $search_results = http_get($target, $referer = "");
        $page = $search_results['FILE'];
        $pageTitle = return_between($page, '<title>', '</title>', EXCL);
        $link = return_between($page, '<a id="replylink"', '/a>', INCL);
        $link = get_attribute($link, $attribute = "href");
        $position = strpos($link, 'reply');
        if ($position === false) {
            echo 'null';
        }else{
            $innerLink = "http://portland.craigslist.org" . $link;
            echo $innerLink;
        }
        //$innerPage = http_get($innerLink, $referer = "");

        //Check if there is some iframe of captcha
        //$captcha = parse_array($innerPage['FILE'], '<iframe', '/iframe>', INCL);
        /*
        if(empty($captcha)){    //if iframe is not found
            $content = return_between($innerPage['FILE'], '<div class="reply_options"', 'div>', EXCL);
            echo $content;
        }else{ //Captcha to be validated
            echo $innerPage['FILE'];
        }
        */
    }