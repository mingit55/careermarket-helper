<!-- 
    # 면접 신청 현황
    - 기업명
    - 기업 업종
    - 면접자의 수
    - 이력서 수정
 -->

<div id="layout" class="reduced-container py-5">
    <div class="py-5 text-center">
        <div class="title">면접 신청 현황</div>
        <div class="fx-n2 text-gray mt-3">면접을 신청한 기업 목록을 확인하실 수 있습니다</div>
    </div>
    <div class="t__head">
        <div class="cell-50">기업 정보</div>
        <div class="cell-25">신청 인원</div>
        <div class="cell-25">+</div>
    </div>
    <?php foreach($applications as $app):?>
    <div class="t__row">
        <div class="cell-50">
            <div class="px-4">
                <small class="text-gray"><?=$app->company_field?> - <?=$app->company_category?></small>
                <div class="fx-3 font-weight-bold mt-1"><?=$app->company_name?></div>
            </div>
        </div>
        <div class="cell-25">
            <span class="fx-2"><?=$app->applicant_cnt?></span>
            <span class="text-gray">명</span>
        </div>
        <div class="cell-25 text-right">
            <button class="btn-filled mb-1">이력서 관리</button>
            <button class="btn-filled red" data-role="remove" data-id="<?= $app->id ?>">면접 취소</button>
        </div>
    </div>
    <?php endforeach;?>
    <?php if(count($applications) == 0):?>
    <div class="t__row">
        <div class="cell-100">
            아직 면접을 신청한 기업이 없습니다.
        </div>
    </div>
    <?php endif;?>
</div>