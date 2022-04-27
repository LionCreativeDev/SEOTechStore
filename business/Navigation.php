<?php
//$trace = debug_backtrace();
include_once('DB.php');
//SELECT t1.Category_Name AS lev1, t2.SubCategory_Name as lev2 FROM `category` AS t1 LEFT JOIN sub_category AS t2 ON `t2`.`Category_ID` = t1.`Category_ID`
$sql = "SELECT distinct Category_Name, Category_ID FROM `category`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $temp = 1;
?>
<ul class="menu main-menu">
<?php
    while ($row = $result->fetch_assoc()) {
        $category = $row["Category_Name"];
        $CategoryID = $row["Category_ID"];
        //echo 'Category ('.$row["Category_Name"].')<br>';
        $page = '';

        if($category === "SEO")
            $page="seo.php";
        else if ($category === "Content Writing")
            $page="content-writing.php";
        else if ($category === "Graphics Designing")
            $page="graphics-designing.php";
        ?>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children active"><a href="#" <?php //echo (basename($trace[0]['file'])==='index.php' ? ' style="color:white;"' :''); ?>><?php echo $category; ?></a>
            <ul class="sub-menu active">
                <?php
                        $sql1 = "SELECT distinct SubCategory_Name FROM `sub_category` where Category_ID=" . $CategoryID;
                        $result1 = $conn->query($sql1);

                        if ($result1->num_rows > 0) {
                            while ($row1 = $result1->fetch_assoc()) {
                                //echo '----Sub-Category ('.$row1["SubCategory_Name"].')<br>';
                                ?>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home"><a href="<?php echo $page.'?sub-category='.urlencode($row1["SubCategory_Name"]); ?>"><?php echo $row1["SubCategory_Name"]; ?></a></li>
                <?php
                            }
                        }
                        ?>
            </ul>
        </li>
<?php
        //print_r($row);
        //echo '<br>';
        if($result->num_rows === $temp)
        {
            ?>
            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="about-us.php"<?php //echo (basename($trace[0]['file'])==='index.php' ? ' style="color:white;"' :''); ?>>About Us</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="contacts.php"<?php //echo (basename($trace[0]['file'])==='index.php' ? ' style="color:white;"' :''); ?>>Contacts Us</a></li>
            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="">Terms & Conditions</a></li> -->
            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">
                    <div id="rb_search_5de2257c9f660" class="rb_search_module">                        
                        <i class="flaticon-user"></i>
                    </div>
                </a>
                <ul class="sub-menu active">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#" style="color:black;">Orders History</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#" style="color:black;">Logout</a></li>
                </ul>
            </li> -->
            <?php if (isset($_SESSION["userid"])) { ?>
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">
                    <div id="rb_search_5de2257c9f660" class="rb_search_module">
                        <i class="flaticon-user"></i>
                    </div>
                </a>
                <ul class="sub-menu active">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="Order-History.php">Orders History</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="business/functions.php?action=Logout">Logout</a></li>
                </ul>
            </li>
            <?php } ?>
            <?php
        }
        $temp++;
    }
    ?>
</ul>
    <?php
}

?>