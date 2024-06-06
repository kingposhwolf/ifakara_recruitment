<!DOCTYPE html>
<html >
    <head>
        @include('user.include.head')
    </head>
    <body>
        <div class="container my-3">
            <div class="card" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                       @include('layouts.welcome.header')

                <div class="card-body">
                    <h3>How to apply for a job</h3>
                    <ul style="list-style: lower-alpha">
                        <li>The applicant should create account in the recruitment portal and activate it</li>
                        <li>Applicant should read and understand the advertisement before applying for the job.</li>
                        <li>Applicants should indicate the position he/she is applying for on the head of the cover letter</li>
                        <li>Applicant should remember to attach all necessary documents (academics certificates).</li>
                        <li>Submit your application letter and you will be notified on your successful or failure of your application</li>
                    </ul>
                    <h3 style="margin-top: 15px;">Write a good CV</h3>
                    <p>After having an email address and Register to recruitment portal applicants should activate his/her account and fill all information needed (Personal Details) effectively as shown in the following stages;</p>
                    <ul>
                        <li>Contact Details</li>
                        <li>Academic Qualifications</li>
                        <li>Professional Qualifications</li>
                        <li>Language Proficiency</li>
                        <li>Working Experience</li>
                        <li>Training & Workshop Attended</li>
                        <li>Computer Literacy</li>
                        <li>Referees</li>
                        <li>Other Attachments</li>
                        <li>Declaration</li>
                    </ul>
                
                    @include('layouts.welcome.footer')