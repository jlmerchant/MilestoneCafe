CREATE TABLE CafeItems (
    men_food VARCHAR(30) NOT NULL,
    calories VARCHAR(6) NOT NULL,
    ItemDesc VARCHAR(150) NOT NULL,
    mealTime VARCHAR(25) NOT NULL,
    PRIMARY KEY(calories),
    FOREIGN KEY(men_food)
)