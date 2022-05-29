<form action="">
    <div class="form-group">
        <select class="form-control" id="paper_type">
            <option value="Essay">Essay</option>
            <option value="Thesis">Thesis</option>
            <option value="Assignment">Assignment</option>
        </select>
    </div>
    <div class="form-group" id="content_type">
        <label class="d-flex flex-wrap justify-content-start">
            <span>
            Assignment
                <input type="radio" name="content-type" value="assignment" class="form-control" placeholder="Assignment">
            </span>        
            <span>
            Research
                <input type="radio" name="content-type" value="research" class="form-control" placeholder="Research">
            </span>
            <span>
            Coursework
                <input type="radio" name="content-type" value="coursework" class="form-control" placeholder="Coursework">
            </span>
            <span>
            Case study
                <input type="radio" name="content-type" value="casestudy" class="form-control" placeholder="case study">
            </span>
        </label>
    </div>
    <div class="form-group">
        <select class="form-control" id="study_level">
            <option value="College">College</option>
            <option value="School">School</option>
            <option value="HighSchool">HighSchool</option>
        </select>
    </div>
    <div class="form-group">
        <select class="form-control" id="no_of_days">
            <option value="7">7days</option>
            <option value="15">15days</option>
            <option value="30">30days</option>
        </select>
    </div>
    <div class="form-group">
        <select class="form-control" id="no_of_words">
            <option value="275">275 words</option>
            <option value="480">480 words</option>
            <option value="800">800 words</option>
        </select>
    </div>
</form>