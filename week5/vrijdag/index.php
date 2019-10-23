´
<?php
$json = '{
    "1234" : {
        "firstname": "Niels",
        "lastname": "Moens"
    },
    "5678" : {
        "firstname": "ari",
        "lastname": "liebaard"
    }
}';

$key = "1234";

class Student {

}

$students = json_decode($json);

foreach ( $students as $stdnr => $item){
    $student = new Student();
    $student->nr = $key;
    foreach ($item as $prop => $value) {
        $student->$prop =  $value;
    }
    print_r($student);


}

$studentObject = ($students -> $key);
$encodeStudent = json_encode($students -> $key);

print_r($studentObject);
print_r($encodeStudent);

/*$object = new stdClass();

// nieuw item toevoegen als property met naam 1234
$key = '1234';

$object -> $key = [
        'firstname'=> 'Niels',
        'lastname'=> 'Moens'
];

// nieuw item toevoegen als property met naam 1234
$key = '4567';

$object -> $key = [
    'firstname'=> 'dieter',
    'lastname'=> 'weirdt'
];
$studentnr = '5678';

print_r($object);
print_r($object->$studentnr);*/
´