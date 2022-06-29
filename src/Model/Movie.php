<?php
namespace APP\Model;
class Movie{
    public string $title;
    public int $duration;
    public MovieGender $movieGender;
    public int $yearOfRelease;
    public Director $director;
    public Producer $record;

    public function __construct(
        string $title,
        int $duration,
        MovieGender $movieGender,
        int $yearOfRelease,
        Director $director,
        Producer $producer
    )
{
    $this->title = $title;
    $this->duration = $duration;
    $this->MovieGender = $movieGender;
    $this->yearOfRelease = $yearOfRelease;
    $this->director = $director;
    $this->producer = $producer;

}
}
