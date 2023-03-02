CREATE TABLE Classify (
    classType SET('classic','lite fare') NOT NULL,
    calories VARCHAR(6) NOT NULL,
    men_food VARCHAR(30) NOT NULL,
    PRIMARY KEY (classType),
    FOREIGN KEY (calories) REFERENCES CafeItems(calories),
    FOREIGN KEY (men_food) REFERENCES CafeMenu(men_food)
);