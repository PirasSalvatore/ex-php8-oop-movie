<?php


trait Reviews {
    protected array $reviews = [];

    public function addReview(Review $review) {
        $this->reviews[] = $review;
    }

    public function getReviews() {
        return $this->reviews;
    }

    public function getSingleReview($index) {
        if (isset($this->reviews[$index])) {
            return $this->reviews[$index];
        }
        throw new OutOfBoundsException("Review not found at index $index");
    }
}


?>