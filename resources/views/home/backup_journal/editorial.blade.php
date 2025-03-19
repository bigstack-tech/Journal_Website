@extends('layouts.layout')
@section('content')
<br><br>
<h1 style="text-align: center; color:green">Editorial</h1>
<div>
    <div style="padding: 10px">
        @foreach ($data as $editorial)
        <div style="border: 1px solid silver; margin-bottom:10px; padding 10px; display:flex; justify-content:center">
            <p style="font-size:23px"><b>{{ $editorial->name }},</b> <span>{{ $editorial->institute }}</span>, <b><span>{{ $editorial->country }}</span></b></p>
        </div>
        @endforeach
    </div>
    <div>
        <div>
           <div style="display: flex">
            <h3 style="color: orange">Managing Editor:</h3> <p>Prof. Angelo Nicolaides, Africajournals / University of Zululand, South Africa</p>
           </div>
          <div style="display: flex">
                <h3 style="color: orange"> Web Developer:</h3> <p>Thomas Agba / Bigstack Technologies, Nigeria</p>
            </div>
        </div>
        <div>
            <p>The objectives of the journal include the publication of original and innovative research, quality, double blind peer review and recognition of academic excellence, increase the scholarly impact of the journal, adhere to academic integrity in publishing, international indexing, increase the impact of the journal, ensure accessibility through open electronic access, promote international editorial quality and good management.</p>
        </div>
        <div>
            <h2>Editor-in-Chief, Managing Editor and Editorial Board roles and Responsibilities</h2>
            <p>The Editor-in-Chief is an academic holding a PhD qualification with a demonstrable research profile, including many publications in both local and international peer-reviewed journals/books within the disciplines supported by the journal. The Editor-in-Chief is conscious of the academic publishing environment nationally and internationally, works with authors and key stakeholders such as reviewers, the Managing Editor and the Editorial Board. The Editor-in-Chief is the lead editor and ultimately responsible for the academic content of the journal. They are entitled to accept or reject submissions without fear or favour. The Editor-in-Chief is supported by the Managing Editor and Administrative Assistants. </p>
            <p>The primary responsibilities of the Editor-in-Chief are:</p>
            <br>
            <br>
            <ol>
                <li>1.  Directing the overall strategy of the journal in cooperation the key stakeholders.</li>
                <li>2.	Reviewing submitted manuscripts to ensure quality and focus on journal scope.</li>
                <li>3.	Managing academic integrity and ensuring manuscripts are original works.</li>
                <li>4.	Enabling the Editorial Board to play an active role in journal development; assisting the board to act in an advisory capacity and communicating with the board on a regular basis.</li>
                <li>5.	Serving as an ambassador for the journal, commissioning content and fielding submission enquires.</li>
            </ol>
        </div>
        <div>
            <p>The Managing Editor is an academic holding a M or PhD qualification (preferable) with a research profile, including publications in peer-reviewed journals/books within the disciplines supported by the journal. The Managing Editor works closely with the Editor-In-Chief and the Editorial Board, as well as manages the Administrative Assistants and Web Manager. The role of the Managing Editor is to:</p>
            <p>The primary responsibilities of the Editor-in-Chief are:</p>
            <br>
            <br>
            <ol>
                <li>1.	Assist the Editor-in-Chief and Special Issue Editors to manage academic integrity and ensure manuscripts are original works.</li>
                <li>2.	Administrate journal workflow and act as line manager of Administrative Assistants and Web Manager.</li>
                <li>3.	Communicate with Editor-in-Chief, Special Issue Editors and Editorial Board on administrative matters.</li>
                <li>4.	Develop publication schedules.</li>
                <li>5.	Online (social media) marketing.</li>
                <li>6.	Ensure publication of articles online (once accepted) with DOIs and pagination, as well as indexing and archiving of articles.</li>
                <li>7.	Assistance with accreditation applications, manage relationships with various bodies, such as SCOPUS.</li>
                <li>8.	Liaise with Web Manager; manage website content management.</li>
            </ol>
        </div>
        <div>
            <h2>The role of the Editorial Board voluntary members:</h2>
            <br>
            <ol>
                <li>1.	Provide expertise in their specialist area.</li>
                <li>2.	Review submitted manuscripts, support the Editor-In-Chief.</li>
                <li>3.	Make recommendations on journal policy and scope.</li>
                <li>4.	Work with the Editor-in-Chief and Special Issue Editors, as well as other board members to ensure continuing development of the journal.</li>
                <li>5.	Identify topics for Special Issues of the journal; recommend academic conferences that can promote the journal, which they might also assist to organize, and perhaps even guest edit an issue.</li>
                <li>6.	Attract new and established authors for article submissions and promote the journal wherever possible. To this end, Editorial Board members are also encouraged to make the most of their academic/industry contacts in the journal’s subject area, with the purpose of promoting the journal, obtaining new submissions and readers, and possibly inviting new Editorial Board members onto the journal.</li>
                <li>7.	Submit some of their own work, for consideration, whilst safeguarding that they observe Conflict of Interest rules and follow the due processes. They must state their relationship to the journal. The journal reserves the right to reject manuscripts submitted by editorial board members and limit the number of submissions accepted over a two year period.</li>
            </ol>
        </div>
    </div>
</div>
@endsection
