<!-- 
    # 면접 신청 현황
    - 학생 이름
    - 학과
 -->

 <div id="layout" class="reduced-container py-5">
    <div class="py-5 text-center">
        <div class="title">면접 신청 현황</div>
        <div class="fx-n2 text-gray mt-3">기업에 면접을 신청한 학생 목록을 확인하실 수 있습니다</div>
    </div>
    <div class="t__head">
        <div class="cell-50">학생 정보</div>
        <div class="cell-25">학과</div>
        <div class="cell-25">+</div>
    </div>
    <?php foreach($students as $student):?>
    <div class="t__row">
        <div class="cell-50">
            <div class="px-4">
                <small class="text-gray"><?=$student->school_grade?>학년 <?=$student->school_class?>반 <?=$student->school_number?>번</small>
                <div class="fx-3 font-weight-bold mt-1"><?=$student->student_name?></div>
            </div>
        </div>
        <div class="cell-25"><?=$student->school_field?></div>
        <div class="cell-25 text-right">
            <button class="btn-filled mb-1" data-link="/applications/<?=$student->id?>/resume">이력서 보기</button>
        </div>
    </div>
    <?php endforeach;?>
    <?php if(count($students) == 0):?>
    <div class="t__row">
        <div class="cell-100">
            아직 면접을 신청한 기업이 없습니다.
        </div>
    </div>
    <?php endif;?>
</div>