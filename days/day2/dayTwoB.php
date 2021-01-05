<?php
$pws = fopen("dayTwoInput", "r") or die("Unable to open file!");

$numValidPws = 0;
//find number of lines that follow a preceding rule.
while (!feof($pws)) {
    if ($currentLine=fgets($pws)) {
        $currentPw = new PW($currentLine);
        if($currentPw->isValidV2()){
            $numValidPws++;
        }
    }
}
echo("Total valid pws: ".$numValidPws);



class PW
{
    private $line;
    private $regx;
    private $minOccurrences;
    private $maxOccurrences;
    private $searchChar;

    public function __construct($line)
    {
        $this->parseLine($line);
    }
    private function makeRegex($givenRegex){
        $splitRegex = explode(" ",$givenRegex);
        $this->searchChar=$splitRegex[1];
        $occurrences=explode("-",$splitRegex[0]);
        $this->minOccurrences = $occurrences[0];
        $this->maxOccurrences = $occurrences[1];

        $this->regx = "/".$this->searchChar."/";
    }
    private function parseLine($line)
    {
        $pieces = explode(":", $line);
        $this->regx = $pieces[0];
        $this->line = $pieces[1];
        $this->makeRegex($this->regx);
    }
    function isValid(){
        return (preg_match_all($this->regx,$this->line) >= $this->minOccurrences && preg_match_all($this->regx,$this->line) <= $this->maxOccurrences);
    }
    function isValidV2(){
        $splitLine = str_split($this->line);

        return (($splitLine[$this->minOccurrences] ==$this->searchChar && $splitLine[$this->maxOccurrences] !== $this->searchChar)
            |($splitLine[$this->maxOccurrences] ==$this->searchChar && $splitLine[$this->minOccurrences] !== $this->searchChar));
    }
}

?>
