# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。
<?php
print("#####q1#####" . PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

# 以下に回答を記載

$names[] = "斎藤";

echo PHP_EOL;

print_r($names);

echo PHP_EOL;

print("#####q2#####" . PHP_EOL);

$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

# 以下に回答を記載

echo PHP_EOL;

$array = array_merge($array1, $array2);

print_r($array);

echo PHP_EOL;


print("#####q3#####" . PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

# 以下に回答を記載

echo PHP_EOL;

$numbers_count = array_count_values($numbers);

foreach ($numbers_count as $key => $value) {
    if ($key === 3) {
        echo "配列の中に " . $key .  " は、" . $value . " 個あります。" . PHP_EOL;
    }
}

echo PHP_EOL;

print("#####q4#####" . PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

echo PHP_EOL;

$result_sports1 = array_unique($sports);
$result_sports2 = array_filter($result_sports1, "strlen");
$sports = array_values($result_sports2);
print_r($sports);

echo PHP_EOL;

print("#####q5#####" . PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

# 以下に回答を記載

echo PHP_EOL;

if (empty($array1)) {
    $result_array1 = "true";
} else {
    $result_array1 = "false";
};

print '$array1 = ' . $result_array1 . PHP_EOL;

echo PHP_EOL;

if (empty($array2)) {
    $result_array2 = "true";
} else {
    $result_array2 = "false";
};

print '$array2 = ' . $result_array2 . PHP_EOL;

echo PHP_EOL;

print("#####q6#####" . PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

# 以下に回答を記載

echo PHP_EOL;

print_r(array_map(function ($number) {
    return $number * 10;
}, $numbers1));

echo PHP_EOL;

print("#####q7#####" . PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

# 以下に回答を記載

echo PHP_EOL;

print_r(array_map('intval', $array));

echo PHP_EOL;

print("#####q8#####" . PHP_EOL);
$programming_languages = ["php", "ruby", "python", "javascript"];

# 以下に回答を記載
$programming_languages = array_map('ucfirst', $programming_languages);
$upper_case_programming_languages = array_map('strtoupper', $programming_languages);

echo PHP_EOL;
# 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####" . PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

foreach ($names as $key => $value) {
    $member_number = $key + 1;
    $member_names[] = "会員No." . $member_number . " " . $value;
}
echo PHP_EOL;

print_r($member_names);

echo PHP_EOL;

print("#####q10#####" . PHP_EOL);
$foods = ["いか", "たこ", "うに", "しゃけ", "うにぎり", "うに軍艦", "うに丼"];

# 以下に回答を記載

$search_word = "うに";

echo PHP_EOL;

foreach ( $foods as $food ) {
    if( preg_match( "/" . $search_word . "/" ,$food ) ) {
        print( $food . ": ". "好物です" .PHP_EOL );
    } else {
        print( $food . ": "."まぁまぁ好きです" .PHP_EOL);
    };
};

echo PHP_EOL;

print("#####q11#####" . PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

# 以下に回答を記載

echo PHP_EOL;

$merge_sports = [];
foreach($sports as $key => $result_sport){
    if(is_array($result_sport)){
        $merge_sports = array_merge($merge_sports,$result_sport);
    }else{
        array_push($merge_sports,$result_sport);
    }
}

$result_sports1 = array_unique($merge_sports);
$result_sports2 = array_values($result_sports1);

foreach ($result_sports2 as $key => $hobbies) {
    if ($hobbies === reset($result_sports2)) {
        print("ユーザーの趣味一覧" . PHP_EOL);
    }
    $users_hobbies_number = $key + 1;
    print("No" . $users_hobbies_number . " " . $hobbies . PHP_EOL);
};
echo PHP_EOL;

print("#####q12#####" . PHP_EOL);
$data = ["user" => ["name" => "satou", "age" => 33]];

# 以下に回答を記載

echo PHP_EOL;

print($data["user"]["name"] . PHP_EOL); 

echo PHP_EOL;

print("#####q13#####" . PHP_EOL);
$user_data = ["name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = ["age" => 32, "address" => "沖縄"];

# 以下に回答を記載
echo PHP_EOL;

$user_data = array_merge($user_data,$update_data);
print_r($user_data);

echo PHP_EOL;

print("#####q14#####" . PHP_EOL);
$data = ["name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com"];


echo PHP_EOL;

print_r(array_values($data));

echo PHP_EOL;

print("#####q15#####" . PHP_EOL);
$data1 = ["name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin"];
$data2 = ["name" => "yamada", "hobby" => "baseball", "role" => "normal"];

# 以下に回答を記載

echo PHP_EOL;

print('$data1 = ["name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin"];' . PHP_EOL);
print("実行結果" . PHP_EOL);

if ( array_key_exists('age', $data1) ) {
    print("OK" . PHP_EOL);
} else {
    print("NG" . PHP_EOL);
}

echo PHP_EOL;

print('$data2 = ["name" => "yamada", "hobby" => "baseball", "role" => "normal"];' . PHP_EOL);
print("実行結果" . PHP_EOL);

if ( array_key_exists('age', $data2) ) {
    print("OK" . PHP_EOL);
} else {
    print("NG" . PHP_EOL);
}

echo PHP_EOL;

//------------------------12/13 提出 ここから------------------------

print("#####q16#####" . PHP_EOL);
$users = [
["name" => "satou", "age" => 22],
["name" => "yamada", "age" => 12],
["name" => "takahashi", "age" => 32],
["name" => "nakamura", "age" => 41]
];

# 以下に回答を記載

echo PHP_EOL;

foreach( $users as $value ) {
    print("「私の名前は" . $value["name"] . "です。年齢は" . $value["age"] . "歳です。」" .PHP_EOL);
}

echo PHP_EOL;

print("#####q17#####" . PHP_EOL);
class User
{
    private $name;
    private $age;
    private $gender;

    public function __construct($user_name, $user_age, $user_gender) 
    {
        $this->name = $user_name;
        $this->age = $user_age;
        $this->gender = $user_gender;
    }

    public function info()
    {
        print("名前: " . $this->name . PHP_EOL);
        print("年齢: " . $this->age . PHP_EOL);
        print("性別: " . $this->gender . PHP_EOL);
    }
}

echo PHP_EOL;

$user1 = new User("神里", 32, "男");
$user2 = new User("あじー", 32, "男");

$user1->info();
print("-------------" . PHP_EOL);
$user2->info();

echo PHP_EOL;

print("#####q18#####" . PHP_EOL);

class Man 
{
    private $name;
    private $age;

    public function __construct($user_name,$user_age)
    {
        $this->name = $user_name;
        $this->age = $user_age;
    }

    public function introduce()
    {
        if ( $this->age >= 20)
        {
            print("こんにちは，" . $this->name . "と申します。宜しくお願いいたします。" . PHP_EOL);
        } else {
            print("はいさいまいど〜，" . $this->name . "です！！！" . PHP_EOL);
        }
    }
}

echo PHP_EOL;

$man1 = new Man("あじー", 32);
$man2 = new Man("ゆたぼん", 10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

print("#####q19#####" . PHP_EOL);

class Item
{
# 以下を修正して下さい
    public $name;

    function __construct($book_name)
    {
        $this->name = $book_name;
    }
}

echo PHP_EOL;
# 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
print($book->name . PHP_EOL);

echo PHP_EOL;

print("#####q20#####" . PHP_EOL);
class Human
{
    protected $name;
    protected $age;

    public function __construct($human_name, $human_age)
    {
        $this->name = $human_name;
        $this->age = $human_age;
    }
}

class Zoo extends Human
{
    private $zoo;
    private $entry_fee;

    public function __construct($zoo_name, $zoo_entry_fee)
    {
        $this->zoo = $zoo_name;
        $this->entry_fee = $zoo_entry_fee;
    }

    public function info_entry_fee(Human $human)
    {
        if ($human->age <= 5)
        {
            print($human->name . "さんの入場料金は " . $this->entry_fee["infant"] . " 円です。" . PHP_EOL);
        } elseif ($human->age <= 12)
        {
            print($human->name . "さんの入場料金は " . $this->entry_fee["children"] . " 円です。" . PHP_EOL);
        } elseif ($human->age <= 64)
        {
            print($human->name . "さんの入場料金は " . $this->entry_fee["adult"] . " 円です。" . PHP_EOL);
        } elseif ($human->age <= 120)
        {
            print($human->name . "さんの入場料金は " . $this->entry_fee["senior"] . " 円です。" . PHP_EOL);
        }
    }
}

echo PHP_EOL;

$zoo = new Zoo("旭山動物園", ["infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま", 3);
$human2 = new Human("ゆたぼん", 10);
$human3 = new Human("あじー", 32);
$human4 = new Human("ぎん", 108);

$humans = [$human1, $human2, $human3, $human4];

foreach ($humans as $human) {
$zoo->info_entry_fee($human);
}

echo PHP_EOL;

?>

//------------------------ここまで完了------------------------
