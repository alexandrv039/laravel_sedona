CREATE SCHEMA sedona;


INSERT INTO products (title, img, price, rating, created_at)
VALUES ('Amara Resort & Spa', 'images/catalog/hotel-1.jpg', 4000, 8.5, now()),
       ('Villas at Poco Diablo', 'images/catalog/hotel-2.jpg', 5000, 9.2, now()),
       ('Desert Quail Inn', 'images/catalog/hotel-3.jpg', 2500, 6.9, now()),
       ('GreenTree Inn', 'images/catalog/hotel-4.jpg', 1500, 5.0, now());
