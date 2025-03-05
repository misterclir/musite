{#INCLUDE:header}

<!-- Main Content -->
<section class="content-wrap">


    <!-- Banner -->
<div class="youplay-banner banner-top youplay-banner-parallax small" xmlns="http://www.w3.org/1999/html">
    <div class="image" style="background-image: url('templates/{#TEMPLATE_DIR}/assets/images/banner-blog-bg.jpg')">
    </div>
    <div class="info">
        <div>
            <div class="container">
                <h1>Vantagens Vip</h1>
            </div>
        </div>
    </div>
</div>
<!-- /Banner -->


<div class="container" style="padding-bottom: 40px;">
    <h2 class="h1" style="margin-bottom: 0px;">
        Vantagens
    </h2>
    <h2 class="h4">
        Contribua com o servidor e receba vantagens
        <a href="?page=info" class="btn pull-right">Veja Mais</a>
    </h2>
<table class="table table-bordered table-hover advantages">
    <thead>
    <tr>
        <th style="border-left: none;"></th>
        <th class="header">{#VIP_NAME_0}</th>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><th class="header">{#VIP_NAME_1}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><th class="header">{#VIP_NAME_2}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><th class="header">{#VIP_NAME_3}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><th class="header">{#VIP_NAME_4}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><th class="header">{#VIP_NAME_5}</th><?php endif; ?>
    </tr>
    </thead>
    <tbody>
	
                             <tr>
                              <th scope="row">Alterar dados</th>
                              <td>{#MODIFY_DATA_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#MODIFY_DATA_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#MODIFY_DATA_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#MODIFY_DATA_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#MODIFY_DATA_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#MODIFY_DATA_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th scope="row">Limpar Bau</th>
                              <td>{#CLEAN_VAULT_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CLEAN_VAULT_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CLEAN_VAULT_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CLEAN_VAULT_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CLEAN_VAULT_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CLEAN_VAULT_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th scope="row">Alterar personal ID</th>
                              <td>{#MODIFY_PERSONALID_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#MODIFY_PERSONALID_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#MODIFY_PERSONALID_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#MODIFY_PERSONALID_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#MODIFY_PERSONALID_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#MODIFY_PERSONALID_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th scope="row">Mudar Nick</th>
                              <td>{#CHANGE_NICK_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CHANGE_NICK_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CHANGE_NICK_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CHANGE_NICK_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CHANGE_NICK_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CHANGE_NICK_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th scope="row">Mudar Classe</th>
                              <td>{#CHANGE_CLASS_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CHANGE_CLASS_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CHANGE_CLASS_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CHANGE_CLASS_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CHANGE_CLASS_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CHANGE_CLASS_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th scope="row">Redistribuir Pontos</th>
                              <td>{#REDISTRIBUTE_POINTS_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#REDISTRIBUTE_POINTS_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#REDISTRIBUTE_POINTS_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#REDISTRIBUTE_POINTS_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#REDISTRIBUTE_POINTS_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#REDISTRIBUTE_POINTS_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th scope="row">Limpar Inventário</th>
                              <td>{#CLEAN_INVENTORY_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CLEAN_INVENTORY_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CLEAN_INVENTORY_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CLEAN_INVENTORY_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CLEAN_INVENTORY_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CLEAN_INVENTORY_VIP5}</td><?php endif; ?>
                             </tr>

    </tbody>
</table>

<?php if($PANELUSER_MODULE['RESET']['RESET_MODE']==1): ?>
    <h2 class="h1" style="margin-bottom: 0px;">
        Resets Pontuativos
    </h2>
<table class="table table-bordered table-hover advantages">
    <thead>
    <tr>
        <th style="border-left: none;"></th>
        <th class="header">{#VIP_NAME_0}</th>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><th class="header">{#VIP_NAME_1}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><th class="header">{#VIP_NAME_2}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><th class="header">{#VIP_NAME_3}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><th class="header">{#VIP_NAME_4}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><th class="header">{#VIP_NAME_5}</th><?php endif; ?>
    </tr>
    </thead>
    <tbody>
	
                             <tr>
                              <th>Level para resetar</th>
                              <td>{#LevelReset[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelReset[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelReset[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelReset[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelReset[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelReset[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Level depois de resetar</th>
                              <td>{#LevelAfter[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelAfter[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelAfter[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelAfter[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelAfter[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelAfter[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Zen para resetar</th>
                              <td>{#ZenRequire[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#ZenRequire[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#ZenRequire[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#ZenRequire[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#ZenRequire[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#ZenRequire[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Pontos por reset</th>
                              <td>{#Points[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#Points[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#Points[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#Points[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#Points[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#Points[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga itens ao resetar</th>
                              <td>{#CleanItens[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanItens[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanItens[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanItens[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanItens[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanItens[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga magias ao resetar</th>
                              <td>{#CleanMagics[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanMagics[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanMagics[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanMagics[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanMagics[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanMagics[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga quests ao resetar</th>
                              <td>{#CleanQuests[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanQuests[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanQuests[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanQuests[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanQuests[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanQuests[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
    </tbody>
</table>

<?php endif; ?>
<?php if($PANELUSER_MODULE['RESET']['RESET_MODE']==3): ?>
    <h2 class="h1" style="margin-bottom: 0px;">
        Resets Acumulativo
    </h2>
<table class="table table-bordered table-hover advantages">
    <thead>
    <tr>
        <th style="border-left: none;"></th>
        <th class="header">{#VIP_NAME_0}</th>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><th class="header">{#VIP_NAME_1}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><th class="header">{#VIP_NAME_2}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><th class="header">{#VIP_NAME_3}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><th class="header">{#VIP_NAME_4}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><th class="header">{#VIP_NAME_5}</th><?php endif; ?>
    </tr>
    </thead>
    <tbody>
	
                             <tr>
                              <th>Level para resetar</th>
                              <td>{#LevelReset[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelReset[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelReset[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelReset[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelReset[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelReset[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Level depois de resetar</th>
                              <td>{#LevelAfter[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelAfter[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelAfter[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelAfter[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelAfter[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelAfter[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Zen para resetar</th>
                              <td>{#ZenRequire[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#ZenRequire[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#ZenRequire[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#ZenRequire[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#ZenRequire[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#ZenRequire[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga itens ao resetar</th>
                              <td>{#CleanItens[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanItens[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanItens[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanItens[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanItens[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanItens[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga magias ao resetar</th>
                              <td>{#CleanMagics[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanMagics[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanMagics[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanMagics[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanMagics[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanMagics[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga quests ao resetar</th>
                              <td>{#CleanQuests[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanQuests[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanQuests[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanQuests[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanQuests[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanQuests[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
    </tbody>
</table>

<?php endif; ?>
<?php if($PANELUSER_MODULE['RESET']['RESET_MODE']==4): ?>
    <h2 class="h1" style="margin-bottom: 0px;">
        Resets Tabelados
    </h2>
	<h3 class="h2" style="margin-bottom: 0px;">
		De 0 à 10 resets
	</h3>	
<table class="table table-bordered table-hover advantages">
    <thead>
    <tr>
        <th style="border-left: none;"></th>
        <th class="header">{#VIP_NAME_0}</th>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><th class="header">{#VIP_NAME_1}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><th class="header">{#VIP_NAME_2}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><th class="header">{#VIP_NAME_3}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><th class="header">{#VIP_NAME_4}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><th class="header">{#VIP_NAME_5}</th><?php endif; ?>
    </tr>
    </thead>
    <tbody>
	
                             <tr>
                              <th>Level para resetar</th>
                              <td>{#LevelReset[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelReset[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelReset[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelReset[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelReset[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelReset[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Level depois de resetar</th>
                              <td>{#LevelAfter[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelAfter[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelAfter[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelAfter[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelAfter[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelAfter[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Zen para resetar</th>
                              <td>{#ZenRequire[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#ZenRequire[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#ZenRequire[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#ZenRequire[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#ZenRequire[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#ZenRequire[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga itens ao resetar</th>
                              <td>{#CleanItens[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanItens[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanItens[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanItens[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanItens[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanItens[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga magias ao resetar</th>
                              <td>{#CleanMagics[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanMagics[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanMagics[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanMagics[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanMagics[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanMagics[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga quests ao resetar</th>
                              <td>{#CleanQuests[0-10]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanQuests[0-10]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanQuests[0-10]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanQuests[0-10]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanQuests[0-10]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanQuests[0-10]_VIP5}</td><?php endif; ?>
                             </tr>
    </tbody>
</table>
	<h3 class="h2" style="margin-bottom: 0px;">
		De 11 à 50 resets
	</h3>	
<table class="table table-bordered table-hover advantages">
    <thead>
    <tr>
        <th style="border-left: none;"></th>
        <th class="header">{#VIP_NAME_0}</th>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><th class="header">{#VIP_NAME_1}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><th class="header">{#VIP_NAME_2}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><th class="header">{#VIP_NAME_3}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><th class="header">{#VIP_NAME_4}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><th class="header">{#VIP_NAME_5}</th><?php endif; ?>
    </tr>
    </thead>
    <tbody>
	
                             <tr>
                              <th>Level para resetar</th>
                              <td>{#LevelReset[11-50]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelReset[11-50]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelReset[11-50]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelReset[11-50]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelReset[11-50]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelReset[11-50]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Level depois de resetar</th>
                              <td>{#LevelAfter[11-50]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelAfter[11-50]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelAfter[11-50]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelAfter[11-50]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelAfter[11-50]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelAfter[11-50]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Zen para resetar</th>
                              <td>{#ZenRequire[11-50]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#ZenRequire[11-50]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#ZenRequire[11-50]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#ZenRequire[11-50]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#ZenRequire[11-50]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#ZenRequire[11-50]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga itens ao resetar</th>
                              <td>{#CleanItens[11-50]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanItens[11-50]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanItens[11-50]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanItens[11-50]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanItens[11-50]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanItens[11-50]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga magias ao resetar</th>
                              <td>{#CleanMagics[11-50]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanMagics[11-50]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanMagics[11-50]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanMagics[11-50]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanMagics[11-50]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanMagics[11-50]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga quests ao resetar</th>
                              <td>{#CleanQuests[11-50]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanQuests[11-50]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanQuests[11-50]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanQuests[11-50]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanQuests[11-50]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanQuests[11-50]_VIP5}</td><?php endif; ?>
                             </tr>
    </tbody>
</table>
	<h3 class="h2" style="margin-bottom: 0px;">
		De 51 à 100 resets
	</h3>	
<table class="table table-bordered table-hover advantages">
    <thead>
    <tr>
        <th style="border-left: none;"></th>
        <th class="header">{#VIP_NAME_0}</th>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><th class="header">{#VIP_NAME_1}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><th class="header">{#VIP_NAME_2}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><th class="header">{#VIP_NAME_3}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><th class="header">{#VIP_NAME_4}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><th class="header">{#VIP_NAME_5}</th><?php endif; ?>
    </tr>
    </thead>
    <tbody>
	
                             <tr>
                              <th>Level para resetar</th>
                              <td>{#LevelReset[51-100]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelReset[51-100]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelReset[51-100]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelReset[51-100]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelReset[51-100]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelReset[51-100]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Level depois de resetar</th>
                              <td>{#LevelAfter[51-100]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelAfter[51-100]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelAfter[51-100]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelAfter[51-100]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelAfter[51-100]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelAfter[51-100]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Zen para resetar</th>
                              <td>{#ZenRequire[51-100]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#ZenRequire[51-100]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#ZenRequire[51-100]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#ZenRequire[51-100]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#ZenRequire[51-100]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#ZenRequire[51-100]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga itens ao resetar</th>
                              <td>{#CleanItens[51-100]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanItens[51-100]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanItens[51-100]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanItens[51-100]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanItens[51-100]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanItens[51-100]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga magias ao resetar</th>
                              <td>{#CleanMagics[51-100]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanMagics[51-100]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanMagics[51-100]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanMagics[51-100]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanMagics[51-100]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanMagics[51-100]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga quests ao resetar</th>
                              <td>{#CleanQuests[51-100]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanQuests[51-100]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanQuests[51-100]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanQuests[51-100]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanQuests[51-100]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanQuests[51-100]_VIP5}</td><?php endif; ?>
                             </tr>
    </tbody>
</table>
	<h3 class="h2" style="margin-bottom: 0px;">
		De 101 à 150 resets
	</h3>	
<table class="table table-bordered table-hover advantages">
    <thead>
    <tr>
        <th style="border-left: none;"></th>
        <th class="header">{#VIP_NAME_0}</th>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><th class="header">{#VIP_NAME_1}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><th class="header">{#VIP_NAME_2}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><th class="header">{#VIP_NAME_3}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><th class="header">{#VIP_NAME_4}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><th class="header">{#VIP_NAME_5}</th><?php endif; ?>
    </tr>
    </thead>
    <tbody>
	
                             <tr>
                              <th>Level para resetar</th>
                              <td>{#LevelReset[101-150]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelReset[101-150]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelReset[101-150]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelReset[101-150]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelReset[101-150]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelReset[101-150]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Level depois de resetar</th>
                              <td>{#LevelAfter[101-150]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelAfter[101-150]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelAfter[101-150]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelAfter[101-150]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelAfter[101-150]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelAfter[101-150]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Zen para resetar</th>
                              <td>{#ZenRequire[101-150]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#ZenRequire[101-150]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#ZenRequire[101-150]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#ZenRequire[101-150]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#ZenRequire[101-150]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#ZenRequire[101-150]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga itens ao resetar</th>
                              <td>{#CleanItens[101-150]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanItens[101-150]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanItens[101-150]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanItens[101-150]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanItens[101-150]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanItens[101-150]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga magias ao resetar</th>
                              <td>{#CleanMagics[101-150]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanMagics[101-150]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanMagics[101-150]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanMagics[101-150]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanMagics[101-150]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanMagics[101-150]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga quests ao resetar</th>
                              <td>{#CleanQuests[101-150]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanQuests[101-150]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanQuests[101-150]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanQuests[101-150]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanQuests[101-150]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanQuests[101-150]_VIP5}</td><?php endif; ?>
                             </tr>
    </tbody>
</table>
	<h3 class="h2" style="margin-bottom: 0px;">
		De 151 à 200 resets
	</h3>	
<table class="table table-bordered table-hover advantages">
    <thead>
    <tr>
        <th style="border-left: none;"></th>
        <th class="header">{#VIP_NAME_0}</th>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><th class="header">{#VIP_NAME_1}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><th class="header">{#VIP_NAME_2}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><th class="header">{#VIP_NAME_3}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><th class="header">{#VIP_NAME_4}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><th class="header">{#VIP_NAME_5}</th><?php endif; ?>
    </tr>
    </thead>
    <tbody>
	
                             <tr>
                              <th>Level para resetar</th>
                              <td>{#LevelReset[151-200]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelReset[151-200]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelReset[151-200]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelReset[151-200]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelReset[151-200]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelReset[151-200]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Level depois de resetar</th>
                              <td>{#LevelAfter[151-200]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelAfter[151-200]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelAfter[151-200]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelAfter[151-200]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelAfter[151-200]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelAfter[151-200]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Zen para resetar</th>
                              <td>{#ZenRequire[151-200]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#ZenRequire[151-200]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#ZenRequire[151-200]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#ZenRequire[151-200]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#ZenRequire[151-200]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#ZenRequire[151-200]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga itens ao resetar</th>
                              <td>{#CleanItens[151-200]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanItens[151-200]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanItens[151-200]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanItens[151-200]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanItens[151-200]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanItens[151-200]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga magias ao resetar</th>
                              <td>{#CleanMagics[151-200]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanMagics[151-200]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanMagics[151-200]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanMagics[151-200]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanMagics[151-200]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanMagics[151-200]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga quests ao resetar</th>
                              <td>{#CleanQuests[151-200]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanQuests[151-200]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanQuests[151-200]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanQuests[151-200]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanQuests[151-200]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanQuests[151-200]_VIP5}</td><?php endif; ?>
                             </tr>
    </tbody>
</table>
	<h3 class="h2" style="margin-bottom: 0px;">
		De 201 à 300 resets
	</h3>	
<table class="table table-bordered table-hover advantages">
    <thead>
    <tr>
        <th style="border-left: none;"></th>
        <th class="header">{#VIP_NAME_0}</th>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><th class="header">{#VIP_NAME_1}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><th class="header">{#VIP_NAME_2}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><th class="header">{#VIP_NAME_3}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><th class="header">{#VIP_NAME_4}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><th class="header">{#VIP_NAME_5}</th><?php endif; ?>
    </tr>
    </thead>
    <tbody>
	
                             <tr>
                              <th>Level para resetar</th>
                              <td>{#LevelReset[201-300]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelReset[201-300]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelReset[201-300]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelReset[201-300]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelReset[201-300]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelReset[201-300]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Level depois de resetar</th>
                              <td>{#LevelAfter[201-300]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelAfter[201-300]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelAfter[201-300]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelAfter[201-300]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelAfter[201-300]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelAfter[201-300]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Zen para resetar</th>
                              <td>{#ZenRequire[201-300]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#ZenRequire[201-300]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#ZenRequire[201-300]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#ZenRequire[201-300]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#ZenRequire[201-300]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#ZenRequire[201-300]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga itens ao resetar</th>
                              <td>{#CleanItens[201-300]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanItens[201-300]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanItens[201-300]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanItens[201-300]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanItens[201-300]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanItens[201-300]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga magias ao resetar</th>
                              <td>{#CleanMagics[201-300]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanMagics[201-300]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanMagics[201-300]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanMagics[201-300]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanMagics[201-300]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanMagics[201-300]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga quests ao resetar</th>
                              <td>{#CleanQuests[201-300]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanQuests[201-300]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanQuests[201-300]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanQuests[201-300]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanQuests[201-300]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanQuests[201-300]_VIP5}</td><?php endif; ?>
                             </tr>
    </tbody>
</table>
	<h3 class="h2" style="margin-bottom: 0px;">
		Para 301 ou mais resets
	</h3>	
<table class="table table-bordered table-hover advantages">
    <thead>
    <tr>
        <th style="border-left: none;"></th>
        <th class="header">{#VIP_NAME_0}</th>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><th class="header">{#VIP_NAME_1}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><th class="header">{#VIP_NAME_2}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><th class="header">{#VIP_NAME_3}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><th class="header">{#VIP_NAME_4}</th><?php endif; ?>
        <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><th class="header">{#VIP_NAME_5}</th><?php endif; ?>
    </tr>
    </thead>
    <tbody>
	
                             <tr>
                              <th>Level para resetar</th>
                              <td>{#LevelReset[301-XXX]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelReset[301-XXX]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelReset[301-XXX]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelReset[301-XXX]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelReset[301-XXX]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelReset[301-XXX]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Level depois de resetar</th>
                              <td>{#LevelAfter[301-XXX]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#LevelAfter[301-XXX]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#LevelAfter[301-XXX]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#LevelAfter[301-XXX]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#LevelAfter[301-XXX]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#LevelAfter[301-XXX]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Zen para resetar</th>
                              <td>{#ZenRequire[301-XXX]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#ZenRequire[301-XXX]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#ZenRequire[301-XXX]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#ZenRequire[301-XXX]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#ZenRequire[301-XXX]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#ZenRequire[301-XXX]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga itens ao resetar</th>
                              <td>{#CleanItens[301-XXX]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanItens[301-XXX]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanItens[301-XXX]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanItens[301-XXX]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanItens[301-XXX]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanItens[301-XXX]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga magias ao resetar</th>
                              <td>{#CleanMagics[301-XXX]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanMagics[301-XXX]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanMagics[301-XXX]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanMagics[301-XXX]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanMagics[301-XXX]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanMagics[301-XXX]_VIP5}</td><?php endif; ?>
                             </tr>
                             <tr>
                              <th>Apaga quests ao resetar</th>
                              <td>{#CleanQuests[301-XXX]_FREE}</td>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><td>{#CleanQuests[301-XXX]_VIPS}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><td>{#CleanQuests[301-XXX]_VIPG}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><td>{#CleanQuests[301-XXX]_VIP3}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><td>{#CleanQuests[301-XXX]_VIP4}</td><?php endif; ?>
                              <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><td>{#CleanQuests[301-XXX]_VIP5}</td><?php endif; ?>
                             </tr>
    </tbody>
</table>

<?php endif; ?>
    </div>
<style>
    .advantages td, .advantages th{
        padding: 20px !important;
    }
    .advantages{
        margin-top: 60px;
    }
    .advantages{
        border: none !important;
    }
    .advantages .header{
        border-top: 1px solid rgba(255,255,255,.1) !important;
    }
    .advantages .mega{
        font-weight: bold;
        font-size: 16px;
    }

</style>    

{#INCLUDE:footer}