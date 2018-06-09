/* 1. Lấy ra users sử dụng đầu số điện thoại: 098 */
 SELECT * FROM users WHERE phone LIKE '098%';
/* 2. Lấy ra users sử dụng gmail*/
 SELECT * FROM users WHERE email LIKE '%@gmail%';
/*3. Lấy ra users có chữ "a" trong tên */
SELECT * FROM users WHERE name LIKE '%a%';
/* 4. Xóa users dùng số điện thoại có đầu 098 và chữ "a" trong tên */
DELETE * FROM users WHERE phone LIKE '098%' 
AND name LIKE '%a%';
/* 5. Lấy ra users có số điện thoại mà số thứ 2 là số 8 */
SELECT * FROM users WHERE phone LIKE '_8%';