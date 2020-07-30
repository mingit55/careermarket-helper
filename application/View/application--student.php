<!-- 
    # 면접 신청 현황
    - 기업명
    - 기업 업종
    - 면접자의 수
    - 이력서 수정
 -->

<div id="layout" class="reduced-container py-5">
    <div class="py-5 text-center">
        <div class="title"><?=lang("면접 신청 현황", "Interview Application Status")?></div>
        <div class="fx-n2 text-gray mt-3"><?=lang("면접을 신청한 기업 목록을 확인하실 수 있습니다", "You can check the list of companies that have applied for an interview.")?></div>
    </div>
    <div class="t__head">
        <div class="cell-50"><?=lang("기업 정보", "Company")?></div>
        <div class="cell-25"><?=lang("신청 인원", "Personnel")?></div>
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
            <span class="fx-2"><?=number_format($app->applicant_cnt)?></span>
            <span class="text-gray"><?=lang("명", "")?></span>
        </div>
        <div class="cell-25 text-right">
            <button class="btn-filled mb-1" data-link="/applications/<?=$app->id?>/resume"><?=lang("이력서 관리", "Manage Resume")?></button>
            <button class="btn-filled red" data-role="remove" data-id="<?= $app->id ?>"><?=lang("면접 취소", "Cancel")?></button>
        </div>
    </div>
    <?php endforeach;?>
    <?php if(count($applications) == 0):?>
    <div class="t__row">
        <div class="cell-100">
            <?=lang("아직 면접을 신청하지 않았습니다.", "You haven't asked for an interview yet.")?>
        </div>
    </div>
    <?php endif;?>
</div>