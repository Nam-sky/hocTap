<?php
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $old = $_POST['old'];
    $trinhdo = $_POST['trinhdo'];
    echo "Tên của bạn là: ".$fullname."<br>";
    switch ($gender) {
        case '1':
            echo "Giới tính của bạn là Nam <br>";
            if ($old < 20) {
                echo "Bạn chưa đủ tuổi kết hôn <br>";
                switch ($trinhdo) {
                    case '1':
                        echo "Trình độ học vấn của bạn là: Dưới 12 ";
                        break;
                    case '2':
                        echo "Trình độ học vấn của bạn là: 12/12";
                        break;
                    case '3':
                        echo "Trình độ học vấn của bạn là: Trung cấp";
                        break;  
                    case '4':
                        echo "Trình độ học vấn của bạn là: Cao đẳng";
                        break;  
                    case '5':
                        echo "Trình độ học vấn của bạn là: Đại học";
                        break;
                    case '6':
                        echo "Trình độ học vấn của bạn là: Trên đại học";
                        break;
                }
            }elseif ($old >= 20) {
                echo "Bạn đã đủ tuổi kết hôn <br>";
                switch ($trinhdo) {
                    case '1':
                        echo "Trình độ học vấn của bạn là: Dưới 12 ";
                        break;
                    case '2':
                        echo "Trình độ học vấn của bạn là: 12/12";
                        break;
                    case '3':
                        echo "Trình độ học vấn của bạn là: Trung cấp";
                        break;  
                    case '4':
                        echo "Trình độ học vấn của bạn là: Cao đẳng";
                        break;  
                    case '5':
                        echo "Trình độ học vấn của bạn là: Đại học";
                        break;
                    case '6':
                        echo "Trình độ học vấn của bạn là: Trên đại học";
                        break;
                }
            }    
        break;
        case '2':
            echo "Giới tính của bạn là Nữ <br>";
            if ($old < 18) {
                echo "Bạn chưa đủ tuổi kết hôn <br>";
                switch ($trinhdo) {
                    case '1':
                        echo "Trình độ học vấn của bạn là: Dưới 12 ";
                        break;
                    case '2':
                        echo "Trình độ học vấn của bạn là: 12/12";
                        break;
                    case '3':
                        echo "Trình độ học vấn của bạn là: Trung cấp";
                        break;  
                    case '4':
                        echo "Trình độ học vấn của bạn là: Cao đẳng";
                        break;  
                    case '5':
                        echo "Trình độ học vấn của bạn là: Đại học";
                        break;
                    case '6':
                        echo "Trình độ học vấn của bạn là: Trên đại học";
                        break;
                }
            }elseif ($old >= 18) {
                echo "Bạn đã đủ tuổi kết hôn <br>";
                switch ($trinhdo) {
                    case '1':
                        echo "Trình độ học vấn của bạn là: Dưới 12 ";
                        break;
                    case '2':
                        echo "Trình độ học vấn của bạn là: 12/12";
                        break;
                    case '3':
                        echo "Trình độ học vấn của bạn là: Trung cấp";
                        break;  
                    case '4':
                        echo "Trình độ học vấn của bạn là: Cao đẳng";
                        break;  
                    case '5':
                        echo "Trình độ học vấn của bạn là: Đại học";
                        break;
                    case '6':
                        echo "Trình độ học vấn của bạn là: Trên đại học";
                        break;
                }
            }    
        break;    
            default:
                echo "Mời bạn nhập tuổi";
                break;
        }
