<div class="flex flex-col sm:flex-row">
    <div class="flex-1 border-2">
        <h3>Recent Reviews</h3>
        @foreach($reviews as $review)
            <x-reviews.review-card :review='$review'/>
        @endforeach
    </div>
    <div class="flex-1 border-2">Right</div>
</div>