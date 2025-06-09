<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Employer;
use App\Models\Job;


class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_belongs_to_employer()
     {
        //Arrange
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        //Act and assert
        $this->assertTrue($job->employer->is($employer));

     }

     public function test_has_tags()
     {
        //Arrange
        $job = Job::factory()->create();

        //Act
        $job->tag('Frontend');

        //Assert
        $this->assertCount(1, $job->tags);
     }
}
