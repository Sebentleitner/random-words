<?php

namespace Sebentleitner\RandomWords;

class Sentence
{
    private string $sentence ='';

    /**
     * Get the original sentence
     *
     * @return string original sentence
     */
    public function getSentence(): string
    {
        return $this->sentence;
    }

    private function setSentence(string $sentence): void
    {
        $this->sentence = $sentence;
    }
  function __construct($sentence)
  {
     // $this->sentence = $sentence;
      $this->setSentence($sentence);
  }

  public function getRandomSentence() : string
  {  $words = explode(' ', $this.$this->sentence);

      if (count($words) > 0){
          $result = shuffle($words);

          if ($result === true){
              return implode (' ', $words);
          }
      }

    return $this->sentence;

  }

  public function getRandomUpperSentence() : string{
        return strtoupper($this->getRandomSentence());


  }


}