<?php 

$str =<<<xml
    <?xml version ="1.0" ?>
    <BookStore>
        <Book>
            <BookTitle>Yoga</BookTitle>
            <BookAuthor>ABC</BookAuthor>
            <BookPrice>Rs.1234</BookPrice>
        </Book>
        <Book>
            <BookTitle>Story</BookTitle>
            <BookAuthor>PQR</BookAuthor>
            <BookPrice>Rs.999</BookPrice>
        </Book>
        <Book>
            <BookTitle>Technical</BookTitle>
            <BookAuthor>XYZ</BookAuthor>
            <BookPrice>Rs.299</BookPrice>
        </Book>
    </BookStore>
xml;

$fp = fopen("./Bookcategory.xml" , "w+");
fwrite($fp , $str);
fclose($fp);
echo "File created successfully";