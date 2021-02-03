<?php
#Lưu trữ mảng dữ liệu user

/*thông tin user
 * - fullname
 * - username
 * - passowrd
 * - email
 * - id
 */

$list_user = array(
  1 => array(
      'id' => 1,
      'fullname' => 'Thanh Lam',
      'username' => 'thanhlam11',
      'password' => md5('thanhlam'),
      'email' => 'thanhlam@gmail.com'
  ),
    2 => array(
        'id' => 2,
        'fullname' => 'Thanh Lam 2',
        'username' => 'thanhlam12',
        'password' => md5('thanhlam2'),
        'email' => 'thanhlam2@gmail.com'
    ),
    3 => array(
        'id' => 3,
        'fullname' => 'Thanh Lam3',
        'username' => 'thanhlam13',
        'password' => md5('thanhlam3'),
        'email' => 'thanhlam4@gmail.com'
    ),
    4 => array(
        'id' => 4,
        'fullname' => 'Thanh Lam 4',
        'username' => 'thanhlam14',
        'password' => md5('thanhlam4'),
        'email' => 'thanhlam4@gmail.com'
    ),
);