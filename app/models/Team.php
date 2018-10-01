Skip to content



Pull requests
Issues
Marketplace
Explore



Sign out


 Watch
3
 Star
1
 Fork
14

tag/iu-msis
 Code
 Issues 1
 Pull requests 0
 Projects 0
 Wiki
 Insights
Branch: master
Find file
Copy path
iu-msis/app/models/Team.php
2d217e3 5 days ago
 tag End video 12a: Team object and api endpoint
1 contributor

Raw
Blame
History

37 lines (28 sloc) 727 Bytes

<?php



class Team

{

  public $id;

  public $name;

  public $hourly_rate;



  public function __construct($data) {

    $this->id = intval($data['id']);

    $this->name = $data['name'];

    $this->hourly_rate = floatval($data['hourly_rate']);

  }



  public static function fetchAll() {

    // 1. Connect to the database

    $db = new PDO(DB_SERVER, DB_USER, DB_PW);



    // 2. Prepare the query

    $sql = 'SELECT * FROM Teams';

    $statement = $db->prepare($sql);



    // 3. Run the query

    $success = $statement->execute();



    // 4. Handle the results

    $arr = [];

    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

      $theTeam =  new Team($row);

      array_push($arr, $theTeam);

    }



    return $arr;

  }



}
