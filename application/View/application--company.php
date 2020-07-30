<!-- 
    # 면접 신청 현황
    - 학생 이름
    - 학과
 -->

 <div id="layout" class="reduced-container py-5">
    <div class="py-5 text-center">
    <div class="title"><?=lang("면접 신청 현황", "Interview Application Status")?></div>
        <div class="fx-n2 text-gray mt-3"><?=lang("기업에 면접을 신청한 학생 목록을 확인하실 수 있습니다", "You can check the list of students who have applied for an interview with the company")?></div>
    </div>
    <div class="t__head">
        <div class="cell-50"><?=lang("학생 정보", "Student")?></div>
        <div class="cell-25"><?=lang("학과", "Field")?></div>
        <div class="cell-25">+</div>
    </div>
    <?php foreach($students as $student):?>
    <div class="t__row">
        <div class="cell-50">
            <div class="px-4">
                <small class="text-gray"><?=$student->school_grade?><?=lang("학년", " grade")?> <?=$student->school_class?><?=lang("반", " class")?> <?=$student->school_number?><?=lang("번", " number")?></small>
                <div class="fx-3 font-weight-bold mt-1"><?=$student->student_name?></div>
            </div>
        </div>
        <div class="cell-25"><?=$student->school_field?></div>
        <div class="cell-25 text-right">
            <button class="btn-filled mb-1" data-link="/applications/<?=$student->id?>/resume"><?=lang("이력서 보기", "Show Resume")?></button>
        </div>
    </div>
    <?php endforeach;?>
    <?php if(count($students) == 0):?>
    <div class="t__row">
        <div class="cell-100">
            <?=lang("아직 면접을 신청한 학생이 없습니다.", "No student has applied for an interview yet.")?>
        </div>
    </div>
    <?php endif;?>
</div>