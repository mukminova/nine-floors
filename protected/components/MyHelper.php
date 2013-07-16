<?php

/**
 * Description of Helper
 *
 * @author Maks
 */
class MyHelper {

  public static function getRusMonth($month) {
    if ($month > 12 || $month < 1)
      return FALSE;
    $aMonth = array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
    return $aMonth[$month - 1];
  }

  public static function render($el, $url, $data, $title) {
    if (isset($_POST['async'])) {
      echo json_encode(array('status' => 'success', 'data' => $el->renderPartial($url, $data, true), 'title' => $title));
    } else {
      $el->pageTitle = $title;
      $el->render($url, $data);
    }
  }

}

?>
