<html>
  <head>
    <title>PHP Functions</title>
  </head>
  <body>
    <?php 
      $campanies=[
        "carto",
        "pato",
        "sato",
        "toyota",
        "Ikea",
        "nessan",
        "tsla",
        "lg",
        "kia",
        "irona",
        "brawn",
        "sigma",
        "omiga",
        "santora",
        "microsoft",
        "facebook",
        "tiktok",
        "nessla",
        "pepci",
        "konami"
      ];
    $scores=[];
    function successfulCompanies($companyNames,$successRate){
      for($i=0;$i<count($companyNames);$i++){
        $score=rand(0,100);
        $scores[$i]=$score;
      };
      $comp=array_combine($companyNames,$scores);

      foreach($comp as $name=>$point){
        if($point<$successRate){
          echo $name."<br>";
        }else{
          unset($comp[$name]);
        }
      };
      return comp;
    };

successfulCompanies($campanies,50);

    ?>
  </body>
</html>