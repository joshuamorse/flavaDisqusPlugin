<?php

class flavaDisqusActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->identifier = $request->getParameter('identifier');
  }
}
