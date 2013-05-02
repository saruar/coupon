CREATE TABLE coupon(
    id              INT         AUTO_INCREMENT PRIMARY KEY,
    couponCode      VARCHAR(20) NOT NULL,
    couponPrice     FLOAT       NOT NULL,
    startDate       DATETIME    NOT NULL,
    endDate         DATETIME    NOT NULL,
    minimumVal      FLOAT       NOT NULL,
    usageno         INT         NOT NULL,
    usedVal         INT         NOT NULL
);