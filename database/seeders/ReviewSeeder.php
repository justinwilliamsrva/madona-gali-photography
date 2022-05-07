<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'name' => 'Peter',
                'stars' => 5,
                'message' => 'Madona is the BEST',
                'created_at' => date('2021-08-16 10:21:18')
            ],
            [
                'name' => 'Susana Carter',
                'stars' => 5,
                'message' => 'She is very wonderful to work with. She talks you through the poses especially when you feel like you don\'t know what to do. She does an amazing job and always happy to help. Takes her time with everyone. Greatest',
                'created_at' => date('2021-08-29 10:21:18')
            ],
            [
                'name' => 'Melissa Willitts',
                'stars' => 5,
                'message' => 'Madona takes amazing photographs! She is patient and does an excellent job with poses!',
                'created_at' => date('2021-08-29 10:21:18')
            ],
            [
                'name' => 'Monica Hanna',
                'stars' => 5,
                'message' => 'Great person to have business with; love my photos I highly recommend her',
                'created_at' => date('2021-08-29 10:21:18')
            ],
            [
                'name' => 'Shaimaa Abdalla',
                'stars' => 5,
                'message' => 'Madona is a very lovable & down to earth person, she took our family pictures and made the session fun & easy and the outcomes were AMAZING we loved every single photo she took of us Book her for you occasions without any hesitation',
                'created_at' => date('2021-08-29 10:21:18')
            ],
            [
                'name' => 'Jostiena Wanis',
                'stars' => 5,
                'message' => 'We can\'t recommend Madona more! She did such an amazing job memorializing our wedding day. She understood what we wanted and helped us plan a schedule. She captured all the little moments of us. Can\'t speak highly enough of her. From beginning to end she was kind and professional. And the photos are so beautiful - better than what we had expected. Great experience with her; thank you Madona',
                'created_at' => date('2021-08-30 10:21:18')
            ],
            [
                'name' => 'Brittany',
                'stars' => 5,
                'message' => 'Madona was so wonderful to work with during our family photoshoot! Normally my husband and children do not enjoy getting their photos taken, but Madona was really engaging and made the whole process easy and fun for everyone! She helped us to feel comfortable and gave us great suggestions for poses, etc. I would definitely recommend her for your next family photo session!',
                'created_at' => date('2021-08-30 10:21:18')
            ],
            [
                'name' => 'Dina',
                'stars' => 5,
                'message' => 'I loved our session!!! It was fun and productive! Photos turned our amazing and really captured what I was looking for! She listened and delivered! She\'s funny and made feel so comfortable even though people were around us! I did my first photo shoot with my natural curly hair with her and I love how she captured the curls! I normally don’t go that natural for photo shoot but I don\'t regret it! She impressed me and my style and added her magic touch to the final results!! BOOK HER!!',
                'created_at' => date('2021-09-05 10:21:18')
            ],
            [
                'name' => 'Arsany W',
                'stars' => 5,
                'message' => 'Truly a professional. Photos turn out great everytime. Always a pleasure to work with. Thank you Madona for always capturing the best moments in our life!',
                'created_at' => date('2021-09-03 10:21:18')
            ],
            [
                'name' => 'Jouise G',
                'stars' => 5,
                'message' => 'Highly recommend! Madona makes it really quick and easy while also making you enjoy the whole process! My senior pictures turned out perfect, I couldn\'t have asked for a better photographer!',
                'created_at' => date('2021-10-19 10:21:18')
            ],
            [
                'name' => 'Sarah Ayad',
                'stars' => 5,
                'message' => 'Madona is very talented. She did my engagement photos and also headshots. She really knows how to capture your best moments and at the same time makes you feel comfortable throughout the session. She will walk you through the poses and makes them look candid. she is also very fun to be around. The picture quality is amazing, I highly recommend Madona. you will not be disappointed',
                'created_at' => date('2022-02-16 10:21:18')
            ],
        ]);
    }
}
