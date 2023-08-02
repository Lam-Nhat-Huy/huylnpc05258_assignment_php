<?php
include './config/config.php';

if (isset($_GET['pages'])) {
    switch ($_GET['pages']) {

        case 'login':
            include './admin/login.php';
            break;
        case 'register':
            include './admin/register.php';
            break;

        case 'users':
            switch ($_GET['action']) {
                case 'list':
                    include './admin/user/ListUser.php';
                    break;
                case 'add':
                    include './admin/user/AddUserphp';
                    break;
                case 'edit':
                    include './admin/user/EditUser.php';
                    break;
                case 'delete':
                    include './admin/user/DeleteUserte.php';
                    break;
                default:
                    include './admin/user/AddUser.php';
                    break;
            }
            break;

        case 'product':
            switch ($_GET['action']) {
                case 'list':
                    include './admin/product/ListProduct.php';
                    break;
                case 'add':
                    include './admin/product/AddProductphp';
                    break;
                case 'edit':
                    include './admin/product/EditProduct.php';
                    break;
                case 'delete':
                    include './admin/product/DeleteProductte.php';
                    break;
                default:
                    include './admin/product/AddProduct.php';
                    break;
            }
            break;

        case 'category':
            switch ($_GET['action']) {
                case 'list':
                    include './admin/category/ListCategory.php';
                    break;
                case 'add':
                    include './admin/category/AddCategoryphp';
                    break;
                case 'edit':
                    include './admin/category/EditCategory.php';
                    break;
                case 'delete':
                    include './admin/category/DeleteCategoryte.php';
                    break;
                default:
                    include './admin/category/AddCategory.php';
                    break;
            }
            break;

        default:
            break;
    }
}
