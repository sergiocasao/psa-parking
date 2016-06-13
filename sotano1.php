<script>

jQuery(function($){


var rsr = Raphael('rsr', '841.9', '595.3');

var rsrGroups = [];


//Empiezan planos de fondo

var PLANO_PRINCIPAL_S1 = rsr.path("M166.6,59.1C132.4,120.8,98,182.7,63.7,244.4  c-3.5,7.7-10.8,26.2-8,50.2c2.7,23.5,13.6,39.5,18.7,46.2c74.9,0,149.8,0,224.7,0v98.8h96.5v21.8h136.3v-25.2h119.4V468H664v-22.6  l116-0.1c14.5,0.4,21.7-5.3,24-7.4c10.7-9.8,10.9-27.5,11-38.1c0,0,0,0,0-15.5c0-4.3,0-8.7,0-13.1c0-11.4,0-17.2,0-17.3  c0-13.5-0.1-14.4-0.1-23.9c0-6,0.1-6.7,0-10.7c0-6.3-0.1-7.7-0.2-16.2c-0.1-4.9-0.1-6.2-0.1-9.5c0-2.9-0.1-4.6-0.1-6.4  c-0.1-3.8-0.1-6.7-0.1-11.4c0-5,0-6.7,0-15.7c0-10.8,0-16.3,0-18.3c0-13.2,0.1-13.9,0-14.2c0,0,0,0,0-0.1  c-2.7-15-10.9-23.8-10.9-23.8c-9.1-9.1-22.3-10.2-30.3-10.7c-1.8-0.1-8.8-0.1-22.7-0.1c-0.8,0-3.9,0-7.9,0c-3.9,0-6.8,0-7,0  c-4.6,0-93.2,0.4-303.7,1.4c0-20.3,0-40.5,0-60.8c-42.3,0-84.5,0.1-126.7,0.1c0-24.8,0.1-49.6,0.1-74.5  C259.2,59.1,212.9,59.1,166.6,59.1z");
PLANO_PRINCIPAL_S1.attr({fill: '#F8C82D',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qv');

//Planos generales

var path_px = rsr.path("M299.2,340.9h5.7v57.4c42.4,0.1,85,0.2,127.4,0.3  c0.1,19.9,0.2,39.9,0.2,59.8c-6.1,0-12.3,0.1-18.4,0.1c0-6.3,0-12.6,0-18.9c6.1-0.1,12.1-0.1,18.3-0.1c0-1.4,0-2.8,0-4.3  c-42.4-0.1-85-0.2-127.4-0.2c0-12.2,0-24.4,0-36.6");
path_px.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_px');

var rect_qa = rsr.rect(155.1, 217.6, 63.1, 37.4);
rect_qa.attr({x: '155.1',y: '217.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_qa');

var path_qb = rsr.path("M157.2,158.6h59.4V195H155c0-4.3,0-7.9,0-10.6c0.1-7.7,0.1-4,0.1-11.1  c0.1-4.2,0-5.9,0.4-8.5C156.1,162.1,156.7,160,157.2,158.6z");
path_qb.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qb');

var path_qe = rsr.path("M514.3,461.4c-0.1,2.1-0.1,5.1,0,8.6c0.1,4.3,0.2,9.8,0.6,13.1  c0.9,10.6,4.5,19.6,5.4,21.9c9.7,24.1,31.7,36.9,32.7,37.5c14.5,8.2,28.3,9.4,35.7,9.5c8.9,0.4,21.6-0.6,34.7-7.1  c27.7-13.7,37-41.6,38.6-50.1c0.9-5.1,1.5-11.5,1.5-11.5c0.6-6.3,0.6-11.6,0.6-15.3");
path_qe.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qe');

var ellipse_qc = rsr.ellipse(589.8, 477.2, 36.6, 37.4);
ellipse_qc.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'ellipse_qc');

var circle_qd = rsr.circle(589, 476, 12);
circle_qd.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'circle_qd');

var path_qr = rsr.path("M97.5,319.9H79.3v21h18.2v-25.8h19.7v-37.3H97.5v-26.4l18.9-0.1  c-0.1-25-0.2-49.9-0.2-74.9c-0.1-7.4,0.7-17.2,3.8-28.2c1.9-6.6,4.2-12.2,6.5-16.9");
path_qr.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qr');

var rect_qx = rsr.rect(686.2, 435.5, 49.7, 9.8);
rect_qx.attr({x: '686.2',y: '435.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_qx');

var path_cp = rsr.path("M49.4,350.2c-4-10-8-19.9-11.9-29.8c-1-2.7-2.4-6.5-3.7-11.2  c-0.9-3.2-4.5-15.9-5.2-26.9c-1.1-16.8,4.3-32.1,9-41.8L138.9,59.1h27.8v17.6h138.7V59.1c-46.2,0-92.5,0.1-138.7,0.1");
path_cp.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_cp');

var path_cq = rsr.path("M178.8,100.9c12.2,0,24.4-0.1,36.6-0.1c2.4-0.1,4,1.9,3.8,3.6  c-0.2,1.5-1.7,2.8-3.7,2.8c-12.1,0-24.3,0-36.4,0c-2,0.1-3.5-1.5-3.5-3.2C175.6,102.2,177,100.9,178.8,100.9z");
path_cq.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_cq');

var path_cr = rsr.path("M145.4,126.4c-4,4.5-9.6,12.1-13.1,22.6c-3,9.1-3.1,16.6-3.1,20.8  c-0.1,35.6,0.8,78.1,0.9,81.7h2.7c-1.2-36.8-1.4-65.4-1.1-81.7c0.1-4.4,0.3-12.3,3.8-21.7c3.4-9.2,8.4-15.7,11.9-19.7  C146.7,127.7,146.1,127,145.4,126.4z");
path_cr.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_cr');

var path_cs = rsr.path("M155.3,251.7c-0.4-43.9-0.3-75.9,0-82.6c0.2-5.4,1.2-8.3,2-10.5  c0.6-1.6,1.4-3.2,3.1-6.2c2.5-4.7,2.7-4.8,4.8-8.5c1.4-2.4,3.3-5.8,5.5-10c0.4-0.9,1.5-2.7,3.8-4.1s4.5-1.5,5.7-1.5  c8.1-0.4,12.6,0,17.6-0.2c4.6-0.2,9.3,0.2,13.9-0.1c0.6-0.1,3-0.2,4.9,1.2c0.4,0.3,1.4,1.1,1.6,2.2c0,0,0.2,1.2-0.6,2.2  c-1.3,1.9-4.8,1.8-6.6,1.7c-4.4-0.1-8.8,0.3-13.2,0.1c-4.1-0.2-8.5-0.1-17.2,0c-4.7,0.1-8.5,0.2-11,0.3");
path_cs.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_cs');


// !--Planos generales

//Cuadros fondo estacionamientos

var rect_qp = rsr.rect(97.5, 277.9, 19.7, 37.3);
rect_qp.attr({x: '97.5',y: '277.9',fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_qp');

var rect_qq = rsr.rect(63.1, 251.5, 34.3, 26.4);
rect_qq.attr({x: '63.1',y: '251.5',fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_qq');

var path_py = rsr.path("M304.8,340.9h127.7v34.6H323c0-11.5,0-23,0-34.5");
path_py.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_py');

var rect_pz = rsr.rect(135.7, 279, 82.4, 35.1);
rect_pz.attr({x: '135.7',y: '279',fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pz');

var path_qf = rsr.path("M305.2,159.6c0,12.3,0,24.6,0,36.9c35.6,0,71.3-0.1,106.9-0.1  c0-12.3,0-24.6,0-36.9C376.5,159.5,340.9,159.6,305.2,159.6z");
path_qf.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qf');

var path_qg = rsr.path("M305.2,218.1c0,12.8,0,25.6,0,38.4H432c0-12.8,0-25.6-0.1-38.4  C389.8,218.1,347.5,218.1,305.2,218.1z");
path_qg.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qg');

var rect_qh = rsr.rect(305.4, 279.1, 126.7, 36.7);
rect_qh.attr({x: '305.4',y: '279.1',fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_qh');

var rect_qi = rsr.rect(518.9, 220.2, 151.2, 36.3);
rect_qi.attr({x: '518.9',y: '220.2',fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_qi');

var rect_qj = rsr.rect(518.9, 279.1, 151.2, 36.7);
rect_qj.attr({x: '518.9',y: '279.1',fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_qj');

var path_qk = rsr.path("M518.9,340v36.3c50.4,0.1,100.8,0.1,151.2,0.1c0-12.1,0-24.2,0-36.3  C619.7,340,569.4,340,518.9,340z");
path_qk.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qk');

var path_ql = rsr.path("M 518.9,398.7 518.9,436.2 670.1,436.2 670.1,398.7  z");
path_ql.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_ql');

var path_qm = rsr.path("M753.1,220.5v37.6c13.7,0,27.5,0,41.2,0c0-6.2,0-12.5,0.1-18.8  c-3.5,0-6.9,0-10.3,0c0-6.2,0-12.5,0-18.7C773.7,220.5,763.4,220.5,753.1,220.5z");
path_qm.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qm');

var path_qn = rsr.path("M794.3,277.3c-13.6,0-27.3,0-40.9,0V314c20.4,0,40.9-0.1,61.3-0.1  c0-6.1-0.1-12.1-0.1-18.2c-6.8,0-13.6,0-20.4,0C794.3,289.6,794.3,283.5,794.3,277.3z");
path_qn.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qn');

var path_qo = rsr.path("M794.9,376.4c-13.4,0-26.7,0-40.1-0.1v-35.7c20,0,40,0,60.1,0  c0,5.9,0.1,11.9,0.1,17.9c-6.7,0-13.3,0-20,0C794.9,364.5,794.9,370.4,794.9,376.4z");
path_qo.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qo');

var path_qu = rsr.path("M755.2,397.7c0,6.6,0.1,13.2,0.1,19.9c9.8,0,19.5,0.1,29.3,0.1  c0-1.1,0-2.1,0-3.2c3.2,0,6.5,0,9.7,0c0-5.6,0-11.2,0-16.8C781.3,397.6,768.3,397.6,755.2,397.7z");
path_qu.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qu');

// !-- Cuadros fondo estacionamientos

//Escaleras

var path_ps = rsr.path("M670.2,445.4c0-3.1,0-6.1-0.1-9.2c-6.2,0-12.5,0-18.7,0v31.7H664  v-22.6L670.2,445.4z");
path_ps.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_ps');
var path_pw = rsr.path("M 395.7,439.7 395.7,435.2 #F3F3F335.2 402.5,461.5   395.7,461.5  z");
path_pw.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pw');

// !--Escaleras

//Bicis

var rect_pt = rsr.rect(518.9, 436.2, 12.9, 25.2);
rect_pt.attr({x: '518.9',y: '436.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pt');

// !--Bicis

//Rampas

var RAMPA_S2_A_S1 = rsr.path("M815,399.8c0,1.2,0,3,0,5.2c-0.3,8.4-0.7,18.2-6.4,27.1  c-1.4,2.1-4.1,6.2-9,9c-2.6,1.5-5.2,2.3-6.6,2.7c-2.1,0.6-3.9,0.8-6.4,1c-5.4,0.5-9.4,0.4-14.8,0.4c-2.2,0-5.6,0-9.8,0.1  c0-6.5,0-13,0-19.4c4.8,0.1,8.8-0.1,11.9-0.3c11-0.7,13.9-2,16-3.7c1.1-0.9,3.1-2.5,4-5.2c0.6-1.5,0.6-3.2,0.7-6.6  c0-0.7,0-0.8,0-5.1c0-1.4,0-2.2,0-2.9c0-2.2,0-8.7-0.1-24.4c6.8,0,13.7,0,20.5,0C815,385.1,815,392.4,815,399.8z");
RAMPA_S2_A_S1.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pv');

var RAMPA_S1_A_S2 = rsr.path("M794.3,295.8c6.8,0,13.6,0,20.4,0l-0.1-68.3  c-1.3-7-3.6-12.3-5.4-15.7c-2.8-5.4-5.2-7.8-5.8-8.4c-0.6-0.6-3.5-3.4-8-5.6c-2.4-1.2-4.7-1.9-5.8-2.2c-1.8-0.5-3.1-0.8-4.1-1  c-3.2-0.7-5.6-0.9-7.7-1.1c-1.1-0.1-2.6-0.2-4.4-0.3c0,6.8,0,13.6,0,20.4c1.4-0.1,8.6-0.3,14.5,5c0.3,0.2,6.1,5.6,6.4,12.2  c0,0.1,0,0,0,3.5c0,2.5,0,5.1,0,7.7c0,2.9,0,5.9,0,8.8c0,0.4,0,8.4,0,8.4c0,6.1,0,12.2,0,18.3C794.3,283.5,794.3,289.6,794.3,295.8z  ");
RAMPA_S1_A_S2.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qy');

// !--Rampas

// Terminan planos de fondo --------------------------------------------------------------------------------

var CP_1 = rsr.rect(79.3, 330.2, 18.2, 10.1);
CP_1.attr({x: '79.3',y: '330.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_1', 'numCajon': '1'});
rsrGroups.push(CP_1);
CP_1.node.id = "CP_1"

var CP_2 = rsr.rect(79.3, 319.9, 18.2, 10.3);
CP_2.attr({x: '79.3',y: '319.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_2', 'numCajon': '2'});
rsrGroups.push(CP_2);
CP_2.node.id = "CP_2"

var CP_3 = rsr.rect(97.5, 298.1, 9.9, 17);
CP_3.attr({x: '97.5',y: '298.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_3', 'numCajon': '3'});
rsrGroups.push(CP_3);
CP_3.node.id = "CP_3"

var CP_4 = rsr.rect(107.4, 298.1, 9.9, 17);
CP_4.attr({x: '107.4',y: '298.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_4', 'numCajon': '4'});
rsrGroups.push(CP_4);
CP_4.node.id = "CP_4"

var CP_5 = rsr.rect(135.7, 296.5, 10.3, 17.6);
CP_5.attr({x: '135.7',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_5', 'numCajon': '5'});
rsrGroups.push(CP_5);
CP_5.node.id = "CP_5"

var CP_6 = rsr.rect(146, 296.5, 10.3, 17.6);
CP_6.attr({x: '146',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_6', 'numCajon': '6'});
rsrGroups.push(CP_6);
CP_6.node.id = "CP_6"

var CP_7 = rsr.rect(156.4, 296.5, 10.3, 17.6);
CP_7.attr({x: '156.4',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_7', 'numCajon': '7'});
rsrGroups.push(CP_7);
CP_7.node.id = "CP_7"

var CP_8 = rsr.rect(166.8, 296.5, 10.3, 17.6);
CP_8.attr({x: '166.8',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_8', 'numCajon': '8'});
rsrGroups.push(CP_8);
CP_8.node.id = "CP_8"

var CP_9 = rsr.rect(177.1, 296.5, 10.3, 17.6);
CP_9.attr({x: '177.1',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_9', 'numCajon': '9'});
rsrGroups.push(CP_9);
CP_9.node.id = "CP_9"

var CP_10 = rsr.rect(187.4, 296.5, 10.3, 17.6);
CP_10.attr({x: '187.4',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_10', 'numCajon': '10'});
rsrGroups.push(CP_10);
CP_10.node.id = "CP_10"

var CP_11 = rsr.rect(197.8, 296.5, 10.3, 17.6);
CP_11.attr({x: '197.8',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_11', 'numCajon': '11'});
rsrGroups.push(CP_11);
CP_11.node.id = "CP_11"

var CP_12 = rsr.rect(208.2, 296.5, 10, 17.6);
CP_12.attr({x: '208.2',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_12', 'numCajon': '12'});
rsrGroups.push(CP_12);
CP_12.node.id = "CP_12"

var CP_13 = rsr.rect(97.5, 277.9, 9.9, 20.2);
CP_13.attr({x: '97.5',y: '277.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_13', 'numCajon': '13'});
rsrGroups.push(CP_13);
CP_13.node.id = "CP_13"

var CP_14 = rsr.rect(107.4, 277.9, 9.9, 20.2);
CP_14.attr({x: '107.4',y: '277.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_14', 'numCajon': '14'});
rsrGroups.push(CP_14);
CP_14.node.id = "CP_14"

var CP_15 = rsr.rect(135.7, 279, 10.3, 17.6);
CP_15.attr({x: '135.7',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_15', 'numCajon': '15'});
rsrGroups.push(CP_15);
CP_15.node.id = "CP_15"

var CP_16 = rsr.rect(146, 279, 10.3, 17.6);
CP_16.attr({x: '146',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_16', 'numCajon': '16'});
rsrGroups.push(CP_16);
CP_16.node.id = "CP_16"

var CP_17 = rsr.rect(156.4, 279, 10.3, 17.6);
CP_17.attr({x: '156.4',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_17', 'numCajon': '17'});
rsrGroups.push(CP_17);
CP_17.node.id = "CP_17"

var CP_18 = rsr.rect(166.8, 279, 10.3, 17.6);
CP_18.attr({x: '166.8',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_18', 'numCajon': '18'});
rsrGroups.push(CP_18);
CP_18.node.id = "CP_18"

var CP_19 = rsr.rect(177.1, 279, 10.3, 17.6);
CP_19.attr({x: '177.1',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_19', 'numCajon': '19'});
rsrGroups.push(CP_19);
CP_19.node.id = "CP_19"

var CP_20 = rsr.rect(187.4, 279, 10.3, 17.6);
CP_20.attr({x: '187.4',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_20', 'numCajon': '20'});
rsrGroups.push(CP_20);
CP_20.node.id = "CP_20"

var CP_21 = rsr.rect(197.8, 279, 10.3, 17.6);
CP_21.attr({x: '197.8',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_21', 'numCajon': '21'});
rsrGroups.push(CP_21);
CP_21.node.id = "CP_21"

var CP_22 = rsr.rect(208.2, 279, 10, 17.6);
CP_22.attr({x: '208.2',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_22', 'numCajon': '22'});
rsrGroups.push(CP_22);
CP_22.node.id = "CP_22"

var CP_23 = rsr.rect(157.2, 236.3, 10.1, 18.7);
CP_23.attr({x: '157.2',y: '236.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_23', 'numCajon': '23'});
rsrGroups.push(CP_23);
CP_23.node.id = "CP_23"

var CP_24 = rsr.rect(167.4, 236.3, 10.1, 18.7);
CP_24.attr({x: '167.4',y: '236.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_24', 'numCajon': '24'});
rsrGroups.push(CP_24);
CP_24.node.id = "CP_24"

var CP_25 = rsr.rect(177.6, 236.3, 10.1, 18.7);
CP_25.attr({x: '177.6',y: '236.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_25', 'numCajon': '25'});
rsrGroups.push(CP_25);
CP_25.node.id = "CP_25"

var CP_26 = rsr.rect(187.7, 236.3, 10.1, 18.7);
CP_26.attr({x: '187.7',y: '236.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_26', 'numCajon': '26'});
rsrGroups.push(CP_26);
CP_26.node.id = "CP_26"

var CP_27 = rsr.rect(197.9, 236.3, 10.1, 18.7);
CP_27.attr({x: '197.9',y: '236.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_27', 'numCajon': '27'});
rsrGroups.push(CP_27);
CP_27.node.id = "CP_27"

var CP_28 = rsr.rect(208.1, 236.3, 10, 18.7);
CP_28.attr({x: '208.1',y: '236.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_28', 'numCajon': '28'});
rsrGroups.push(CP_28);
CP_28.node.id = "CP_28"

var CP_29 = rsr.rect(157.2, 217.6, 10.1, 18.7);
CP_29.attr({x: '157.2',y: '217.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_29', 'numCajon': '29'});
rsrGroups.push(CP_29);
CP_29.node.id = "CP_29"

var CP_30 = rsr.rect(167.4, 217.6, 10.1, 18.7);
CP_30.attr({x: '167.4',y: '217.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_30', 'numCajon': '30'});
rsrGroups.push(CP_30);
CP_30.node.id = "CP_30"

var CP_31 = rsr.rect(177.6, 217.6, 10.1, 18.7);
CP_31.attr({x: '177.6',y: '217.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_31', 'numCajon': '31'});
rsrGroups.push(CP_31);
CP_31.node.id = "CP_31"

var CP_32 = rsr.rect(187.7, 217.6, 10.1, 18.7);
CP_32.attr({x: '187.7',y: '217.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_32', 'numCajon': '32'});
rsrGroups.push(CP_32);
CP_32.node.id = "CP_32"

var CP_33 = rsr.rect(197.9, 217.6, 10.1, 18.7);
CP_33.attr({x: '197.9',y: '217.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_33', 'numCajon': '33'});
rsrGroups.push(CP_33);
CP_33.node.id = "CP_33"

var CP_34 = rsr.rect(208.1, 217.6, 10, 18.7);
CP_34.attr({x: '208.1',y: '217.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_34', 'numCajon': '34'});
rsrGroups.push(CP_34);
CP_34.node.id = "CP_34"

var CP_35 = rsr.rect(157.2, 176.8, 9.9, 18.2);
CP_35.attr({x: '157.2',y: '176.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_35', 'numCajon': '35'});
rsrGroups.push(CP_35);
CP_35.node.id = "CP_35"

var CP_36 = rsr.rect(167.1, 176.8, 9.9, 18.2);
CP_36.attr({x: '167.1',y: '176.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_36', 'numCajon': '36'});
rsrGroups.push(CP_36);
CP_36.node.id = "CP_36"

var CP_37 = rsr.rect(177, 176.8, 9.9, 18.2);
CP_37.attr({x: '177',y: '176.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_37', 'numCajon': '37'});
rsrGroups.push(CP_37);
CP_37.node.id = "CP_37"

var CP_38 = rsr.rect(187, 176.8, 9.9, 18.2);
CP_38.attr({x: '187',y: '176.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_38', 'numCajon': '38'});
rsrGroups.push(CP_38);
CP_38.node.id = "CP_38"

var CP_39 = rsr.rect(196.9, 176.8, 9.9, 18.2);
CP_39.attr({x: '196.9',y: '176.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_39', 'numCajon': '39'});
rsrGroups.push(CP_39);
CP_39.node.id = "CP_39"

var CP_40 = rsr.rect(206.8, 176.8, 9.9, 18.2);
CP_40.attr({x: '206.8',y: '176.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_40', 'numCajon': '40'});
rsrGroups.push(CP_40);
CP_40.node.id = "CP_40"

var CP_41 = rsr.rect(157.2, 158.6, 9.9, 18.2);
CP_41.attr({x: '157.2',y: '158.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_41', 'numCajon': '41'});
rsrGroups.push(CP_41);
CP_41.node.id = "CP_41"

var CP_42 = rsr.rect(167.1, 158.6, 9.9, 18.2);
CP_42.attr({x: '167.1',y: '158.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_42', 'numCajon': '42'});
rsrGroups.push(CP_42);
CP_42.node.id = "CP_42"

var CP_43 = rsr.rect(177, 158.6, 9.9, 18.2);
CP_43.attr({x: '177',y: '158.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_43', 'numCajon': '43'});
rsrGroups.push(CP_43);
CP_43.node.id = "CP_43"

var CP_44 = rsr.rect(187, 158.6, 9.9, 18.2);
CP_44.attr({x: '187',y: '158.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_44', 'numCajon': '44'});
rsrGroups.push(CP_44);
CP_44.node.id = "CP_44"

var CP_45 = rsr.rect(196.9, 158.6, 9.9, 18.2);
CP_45.attr({x: '196.9',y: '158.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_45', 'numCajon': '45'});
rsrGroups.push(CP_45);
CP_45.node.id = "CP_45"

var CP_46 = rsr.rect(206.8, 158.6, 9.9, 18.2);
CP_46.attr({x: '206.8',y: '158.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_46', 'numCajon': '46'});
rsrGroups.push(CP_46);
CP_46.node.id = "CP_46"

var CP_47 = rsr.rect(166.6, 59.1, 10.1, 17.6);
CP_47.attr({x: '166.6',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_47', 'numCajon': '47'});
rsrGroups.push(CP_47);
CP_47.node.id = "CP_47"

var CP_48 = rsr.rect(176.8, 59.1, 9.9, 17.6);
CP_48.attr({x: '176.8',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_48', 'numCajon': '48'});
rsrGroups.push(CP_48);
CP_48.node.id = "CP_48"

var CP_49 = rsr.rect(186.7, 59.1, 9.9, 17.6);
CP_49.attr({x: '186.7',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_49', 'numCajon': '49'});
rsrGroups.push(CP_49);
CP_49.node.id = "CP_49"

var CP_50 = rsr.rect(196.6, 59.1, 9.9, 17.6);
CP_50.attr({x: '196.6',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data({'id': 'CP_50', 'numCajon': '50'});
rsrGroups.push(CP_50);
CP_50.node.id = "CP_50"

var CP_51 = rsr.rect(206.5, 59.1, 9.9, 17.6);
CP_51.attr({x: '206.5',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_g');
rsrGroups.push(CP_51);

var CP_52 = rsr.rect(216.4, 59.1, 9.9, 17.6);
CP_52.attr({x: '216.4',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_h');
rsrGroups.push(CP_52);

var CP_53 = rsr.rect(226.3, 59.1, 9.9, 17.6);
CP_53.attr({x: '226.3',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_i');
rsrGroups.push(CP_53);

var CP_54 = rsr.rect(236.2, 59.1, 9.9, 17.6);
CP_54.attr({x: '236.2',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_j');
rsrGroups.push(CP_54);

var CP_55 = rsr.rect(246.1, 59.1, 9.9, 17.6);
CP_55.attr({x: '246.1',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_k');
rsrGroups.push(CP_55);

var CP_56 = rsr.rect(256, 59.1, 9.9, 17.6);
CP_56.attr({x: '256',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_l');
rsrGroups.push(CP_56);

var CP_57 = rsr.rect(265.9, 59.1, 9.9, 17.6);
CP_57.attr({x: '265.9',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_m');
rsrGroups.push(CP_57);

var CP_58 = rsr.rect(275.8, 59.1, 9.9, 17.6);
CP_58.attr({x: '275.8',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_n');
rsrGroups.push(CP_58);


var CP_59 = rsr.rect(285.6, 59.1, 9.9, 17.6);
CP_59.attr({x: '285.6',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_o');
rsrGroups.push(CP_59);

var CP_60 = rsr.rect(295.5, 59.1, 9.8, 17.6);
CP_60.attr({x: '295.5',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_p');
rsrGroups.push(CP_60);

var CP_61 = rsr.rect(63.1, 269.1, 17.6, 8.8);
CP_61.attr({x: '63.1',y: '269.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bn');
rsrGroups.push(CP_61);

var CP_62= rsr.rect(80.7, 268.9, 16.8, 9);
CP_62.attr({x: '80.7',y: '268.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bl');
rsrGroups.push(CP_62);

var CP_63 = rsr.rect(63.1, 260.4, 17.6, 8.5);
CP_63.attr({x: '63.1',y: '260.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bm');
rsrGroups.push(CP_63);

var CP_64 = rsr.rect(80.7, 260.4, 16.8, 8.5);
CP_64.attr({x: '80.7',y: '260.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bk');
rsrGroups.push(CP_64);

var CP_65 = rsr.rect(63.1, 251.5, 17.6, 8.8);
CP_65.attr({x: '63.1',y: '251.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bi');
rsrGroups.push(CP_65);

var CP_66 = rsr.rect(80.7, 251.5, 16.8, 8.8);
CP_66.attr({x: '80.7',y: '251.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bj');
rsrGroups.push(CP_66);

// Faltan 67 68 69

var CP_70 = rsr.rect(236.9, 303.6, 16.5, 10.3);
CP_70.attr({x: '236.9',y: '303.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bo');
rsrGroups.push(CP_70);

var CP_71 = rsr.rect(236.9, 293.3, 16.5, 10.3);
CP_71.attr({x: '236.9',y: '293.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bv');
rsrGroups.push(CP_71);

var CP_72 = rsr.rect(236.9, 272.7, 19.5, 20.6);
CP_72.attr({x: '236.9',y: '272.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ch');
rsrGroups.push(CP_72);

var CP_73 = rsr.rect(236.9, 262.4, 19.5, 10.3);
CP_73.attr({x: '236.9',y: '262.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bx');
rsrGroups.push(CP_73);

var CP_74 = rsr.rect(236.9, 252.2, 19.5, 10.3);
CP_74.attr({x: '236.9',y: '252.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bz');
rsrGroups.push(CP_74);

var CP_75 = rsr.rect(236.9, 241.8, 16.5, 10.3);
CP_75.attr({x: '236.9',y: '241.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cb');
rsrGroups.push(CP_75);

var CP_76= rsr.rect(236.9, 231.7, 16.5, 10.1);
CP_76.attr({x: '236.9',y: '231.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cd');
rsrGroups.push(CP_76);

var CP_77 = rsr.rect(269.8, 303.6, 16.4, 10.3);
CP_77.attr({x: '269.8',y: '303.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bp');
rsrGroups.push(CP_77);

var CP_78 = rsr.rect(269.2, 102.7, 16.6, 11.1);
CP_78.attr({x: '269.2',y: '102.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_br');
rsrGroups.push(CP_78);

var CP_79 = rsr.rect(236.6, 142.5, 19.6, 20.6);
CP_79.attr({x: '236.6',y: '142.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ci');
rsrGroups.push(CP_79);

var CP_80 = rsr.rect(236.6, 124.7, 19.7, 17.8);
CP_80.attr({x: '236.6',y: '124.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ck');
rsrGroups.push(CP_80);

var CP_81 = rsr.rect(236.6, 113.7, 16.3, 11.1);
CP_81.attr({x: '236.6',y: '113.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bu');
rsrGroups.push(CP_81);

var CP_82 = rsr.rect(236.6, 102.7, 16.3, 11.1);
CP_82.attr({x: '236.6',y: '102.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bq');
rsrGroups.push(CP_82);

var CP_83 = rsr.rect(253.3, 294.8, 16.5, 19.2);
CP_83.attr({x: '253.3',y: '294.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_co');
rsrGroups.push(CP_83);

var CP_84 = rsr.rect(269.8, 293.3, 16.4, 10.3);
CP_84.attr({x: '269.8',y: '293.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bw');
rsrGroups.push(CP_84);

var CP_85 = rsr.rect(266.7, 272.7, 19.5, 20.6);
CP_85.attr({x: '266.7',y: '272.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cn');
rsrGroups.push(CP_85);

var CP_86 = rsr.rect(266.7, 262.4, 19.4, 10.3);
CP_86.attr({x: '266.7',y: '262.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_by');
rsrGroups.push(CP_86);

var CP_87 = rsr.rect(266.7, 252.2, 19.4, 10.3);
CP_87.attr({x: '266.7',y: '252.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ca');
rsrGroups.push(CP_87);

var CP_88 = rsr.rect(269.5, 241.8, 16.5, 10.3);
CP_88.attr({x: '269.5',y: '241.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cc');
rsrGroups.push(CP_88);

var CP_89 = rsr.rect(269.5, 231.7, 16.5, 10.1);
CP_89.attr({x: '269.5',y: '231.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cg');
rsrGroups.push(CP_89);

var CP_90 = rsr.rect(269.4, 172.3, 16.6, 9.2);
CP_90.attr({x: '269.4',y: '172.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cf');
rsrGroups.push(CP_90);

var CP_91 = rsr.rect(269.4, 163.1, 16.6, 9.2);
CP_91.attr({x: '269.4',y: '163.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ce');
rsrGroups.push(CP_91);

var CP_92 = rsr.rect(266.2, 142.5, 19.7, 20.6);
CP_92.attr({x: '266.2',y: '142.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cj');
rsrGroups.push(CP_92);

var CP_93 = rsr.rect(266.2, 124.7, 19.7, 17.8);
CP_93.attr({x: '266.2',y: '124.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cl');
rsrGroups.push(CP_93);

var CP_94 = rsr.rect(269.2, 113.7, 16.6, 11.1);
CP_94.attr({x: '269.2',y: '113.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bs');
rsrGroups.push(CP_94);

var CP_95 = rsr.rect(252.9, 102.7, 16.3, 19.7);
CP_95.attr({x: '252.9',y: '102.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bt');
rsrGroups.push(CP_95);
//AQUI
var CP_96 = rsr.rect(304.9, 416.8, 9.8, 18.3);
CP_96.attr({x: '304.9',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_np');
rsrGroups.push(CP_96);

var CP_97 = rsr.rect(314.7, 416.8, 9.8, 18.3);
CP_97.attr({x: '314.7',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nr');
rsrGroups.push(CP_97);

var CP_98 = rsr.rect(324.5, 416.8, 9.8, 18.3);
CP_98.attr({x: '324.5',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nt');
rsrGroups.push(CP_98);

var CP_99 = rsr.rect(334.3, 416.8, 9.8, 18.3);
CP_99.attr({x: '334.3',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nv');
rsrGroups.push(CP_99);

var CP_100 = rsr.rect(344.1, 416.8, 9.8, 18.3);
CP_100.attr({x: '344.1',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nx');
rsrGroups.push(CP_100);

var CP_101 = rsr.rect(354, 416.8, 9.8, 18.3);
CP_101.attr({x: '354',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nz');
rsrGroups.push(CP_101);

var CP_102 = rsr.rect(363.7, 416.8, 9.8, 18.3);
CP_102.attr({x: '363.7',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ob');
rsrGroups.push(CP_102);

var CP_103 = rsr.rect(373.6, 416.8, 9.8, 18.3);
CP_103.attr({x: '373.6',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_od');
rsrGroups.push(CP_103);

var CP_104 = rsr.rect(383.3, 416.8, 9.8, 18.3);
CP_104.attr({x: '383.3',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_of');
rsrGroups.push(CP_104);

var CP_105 = rsr.rect(393.2, 416.8, 9.8, 18.3);
CP_105.attr({x: '393.2',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oh');
rsrGroups.push(CP_105);

var CP_106 = rsr.rect(403, 416.8, 9.8, 18.3);
CP_106.attr({x: '403',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oj');
rsrGroups.push(CP_106);

var CP_107 = rsr.rect(412.8, 416.8, 9.8, 18.3);
CP_107.attr({x: '412.8',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ol');
rsrGroups.push(CP_107);

var CP_108 = rsr.rect(422.6, 416.8, 9.8, 18.3);
CP_108.attr({x: '422.6',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_on');
rsrGroups.push(CP_108);

var CP_109 = rsr.rect(304.9, 398.3, 9.8, 18.3);
CP_109.attr({x: '304.9',y: '398.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nq');
rsrGroups.push(CP_109);

var CP_110 = rsr.rect(314.7, 398.4, 9.8, 18.3);
CP_110.attr({x: '314.7',y: '398.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ns');
rsrGroups.push(CP_110);

var CP_111 = rsr.rect(324.5, 398.4, 9.8, 18.3);
CP_111.attr({x: '324.5',y: '398.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nu');
rsrGroups.push(CP_111);

var CP_112 = rsr.rect(334.3, 398.4, 9.8, 18.3);
CP_112.attr({x: '334.3',y: '398.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nw');
rsrGroups.push(CP_112);

var CP_113 = rsr.rect(344.1, 398.4, 9.8, 18.3);
CP_113.attr({x: '344.1',y: '398.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ny');
rsrGroups.push(CP_113);

var CP_114 = rsr.rect(354, 398.4, 9.8, 18.3);
CP_114.attr({x: '354',y: '398.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oa');
rsrGroups.push(CP_114);

var CP_115 = rsr.rect(363.7, 398.4, 9.8, 18.3);
CP_115.attr({x: '363.7',y: '398.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oc');
rsrGroups.push(CP_115);

var CP_116 = rsr.rect(373.6, 398.5, 9.8, 18.3);
CP_116.attr({x: '373.6',y: '398.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oe');
rsrGroups.push(CP_116);

var CP_117 = rsr.rect(383.3, 398.6, 9.8, 18.3);
CP_117.attr({x: '383.3',y: '398.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_og');
rsrGroups.push(CP_117);

var CP_118 = rsr.rect(393.2, 398.6, 9.8, 18.3);
CP_118.attr({x: '393.2',y: '398.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oi');
rsrGroups.push(CP_118);

var CP_119 = rsr.rect(403, 398.6, 9.8, 18.3);
CP_119.attr({x: '403',y: '398.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ok');
rsrGroups.push(CP_119);

var CP_120 = rsr.rect(412.8, 398.6, 9.8, 18.3);
CP_120.attr({x: '412.8',y: '398.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_om');
rsrGroups.push(CP_120);

var CP_121 = rsr.rect(422.6, 398.6, 9.8, 18.3);
CP_121.attr({x: '422.6',y: '398.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oq');
rsrGroups.push(CP_121);

var CP_122 = rsr.rect(323, 358.2, 10, 17.3);
CP_122.attr({x: '323',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cz');
rsrGroups.push(CP_122);

var CP_123 = rsr.rect(332.9, 358.2, 10, 17.3);
CP_123.attr({x: '332.9',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_db');
rsrGroups.push(CP_123);

var CP_124 = rsr.rect(342.9, 358.2, 10, 17.3);
CP_124.attr({x: '342.9',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dd');
rsrGroups.push(CP_124);

var CP_125 = rsr.rect(352.8, 358.2, 10, 17.3);
CP_125.attr({x: '352.8',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_df');
rsrGroups.push(CP_125);

var CP_126 = rsr.rect(362.8, 358.2, 10, 17.3);
CP_126.attr({x: '362.8',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dj');
rsrGroups.push(CP_126);

var CP_127 = rsr.rect(372.8, 358.2, 10, 17.3);
CP_127.attr({x: '372.8',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dl');
rsrGroups.push(CP_127);

var CP_128 = rsr.rect(382.7, 358.2, 10, 17.3);
CP_128.attr({x: '382.7',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dn');
rsrGroups.push(CP_128);

var CP_129 = rsr.rect(392.7, 358.2, 10, 17.3);
CP_129.attr({x: '392.7',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dp');
rsrGroups.push(CP_129);

var CP_130 = rsr.rect(402.6, 358.2, 10, 17.3);
CP_130.attr({x: '402.6',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dr');
rsrGroups.push(CP_130);

var CP_131 = rsr.rect(412.6, 358.2, 10, 17.3);
CP_131.attr({x: '412.6',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dt');
rsrGroups.push(CP_131);

var CP_132 = rsr.rect(422.5, 358.2, 10, 17.3);
CP_132.attr({x: '422.5',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dv');
rsrGroups.push(CP_132);

var CP_133 = rsr.rect(323, 340.9, 10, 17.3);
CP_133.attr({x: '323',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cy');
rsrGroups.push(CP_133);

var CP_134 = rsr.rect(332.9, 340.9, 10, 17.3);
CP_134.attr({x: '332.9',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_da');
rsrGroups.push(CP_134);

var CP_135 = rsr.rect(342.9, 340.9, 10, 17.3);
CP_135.attr({x: '342.9',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dc');
rsrGroups.push(CP_135);

var CP_136 = rsr.rect(352.8, 340.9, 10, 17.3);
CP_136.attr({x: '352.8',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_de');
rsrGroups.push(CP_136);

var CP_137 = rsr.rect(362.8, 340.9, 10, 17.3);
CP_137.attr({x: '362.8',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_di');
rsrGroups.push(CP_137);

var CP_138 = rsr.rect(372.8, 340.9, 10, 17.3);
CP_138.attr({x: '372.8',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dk');
rsrGroups.push(CP_138);

var CP_139 = rsr.rect(382.7, 340.9, 10, 17.3);
CP_139.attr({x: '382.7',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dm');
rsrGroups.push(CP_139);

var CP_140 = rsr.rect(392.7, 340.9, 10, 17.3);
CP_140.attr({x: '392.7',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_do');
rsrGroups.push(CP_140);

var CP_141 = rsr.rect(402.6, 340.9, 10, 17.3);
CP_141.attr({x: '402.6',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dq');
rsrGroups.push(CP_141);

var CP_142 = rsr.rect(412.6, 340.9, 10, 17.3);
CP_142.attr({x: '412.6',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ds');
rsrGroups.push(CP_142);

var CP_143 = rsr.rect(422.5, 340.9, 10, 17.3);
CP_143.attr({x: '422.5',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_du');
rsrGroups.push(CP_143);

var CP_144 = rsr.rect(305.4, 297.5, 9.8, 18.4);
CP_144.attr({x: '305.4',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cx');
rsrGroups.push(CP_144);

var CP_145 = rsr.rect(315.2, 297.5, 9.8, 18.4);
CP_145.attr({x: '315.2',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dx');
rsrGroups.push(CP_145);

var CP_146 = rsr.rect(324.9, 297.5, 9.8, 18.4);
CP_146.attr({x: '324.9',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dz');
rsrGroups.push(CP_146);

var CP_147 = rsr.rect(334.7, 297.5, 9.8, 18.4);
CP_147.attr({x: '334.7',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_eb');
rsrGroups.push(CP_147);

var CP_148 = rsr.rect(344.4, 297.5, 9.8, 18.4);
CP_148.attr({x: '344.4',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ed');
rsrGroups.push(CP_148);

var CP_149 = rsr.rect(354.1, 297.5, 9.8, 18.4);
CP_149.attr({x: '354.1',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ef');
rsrGroups.push(CP_149);

var CP_150 = rsr.rect(363.9, 297.5, 9.8, 18.4);
CP_150.attr({x: '363.9',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_eh');
rsrGroups.push(CP_150);

var CP_151 = rsr.rect(373.6, 297.5, 9.8, 18.4);
CP_151.attr({x: '373.6',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ej');
rsrGroups.push(CP_151);

var CP_152 = rsr.rect(383.4, 297.5, 9.8, 18.4);
CP_152.attr({x: '383.4',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_el');
rsrGroups.push(CP_152);

var CP_153 = rsr.rect(393.1, 297.5, 9.8, 18.4);
CP_153.attr({x: '393.1',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_en');
rsrGroups.push(CP_153);

var CP_154 = rsr.rect(402.9, 297.5, 9.8, 18.4);
CP_154.attr({x: '402.9',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ep');
rsrGroups.push(CP_154);

var CP_155 = rsr.rect(412.6, 297.5, 9.8, 18.4);
CP_155.attr({x: '412.6',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_er');
rsrGroups.push(CP_155);

var CP_156 = rsr.rect(422.4, 297.5, 9.7, 18.4);
CP_156.attr({x: '422.4',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_et');
rsrGroups.push(CP_156);

var CP_157 = rsr.rect(305.4, 279.1, 9.8, 18.4);
CP_157.attr({x: '305.4',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cw');
rsrGroups.push(CP_157);

var CP_158 = rsr.rect(315.2, 279.2, 9.8, 18.4);
CP_158.attr({x: '315.2',y: '279.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dw');
rsrGroups.push(CP_158);

var CP_159 = rsr.rect(324.9, 279.2, 9.8, 18.4);
CP_159.attr({x: '324.9',y: '279.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dy');
rsrGroups.push(CP_159);

var CP_160 = rsr.rect(334.7, 279.1, 9.8, 18.4);
CP_160.attr({x: '334.7',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ea');
rsrGroups.push(CP_160);

var CP_161 = rsr.rect(344.4, 279.1, 9.8, 18.4);
CP_161.attr({x: '344.4',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ec');
rsrGroups.push(CP_161);

var CP_162 = rsr.rect(354.1, 279.2, 9.8, 18.4);
CP_162.attr({x: '354.1',y: '279.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ee');
rsrGroups.push(CP_162);

var CP_163 = rsr.rect(363.9, 279.2, 9.8, 18.4);
CP_163.attr({x: '363.9',y: '279.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_eg');
rsrGroups.push(CP_163);

var CP_164 = rsr.rect(373.6, 279.2, 9.8, 18.4);
CP_164.attr({x: '373.6',y: '279.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ei');
rsrGroups.push(CP_164);

var CP_165 = rsr.rect(383.4, 279.2, 9.8, 18.4);
CP_165.attr({x: '383.4',y: '279.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ek');
rsrGroups.push(CP_165);

var CP_166 = rsr.rect(393.1, 279.1, 9.8, 18.4);
CP_166.attr({x: '393.1',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_em');
rsrGroups.push(CP_166);

var CP_167 = rsr.rect(402.9, 279.1, 9.8, 18.4);
CP_167.attr({x: '402.9',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_eo');
rsrGroups.push(CP_167);

var CP_168 = rsr.rect(412.6, 279.1, 9.8, 18.4);
CP_168.attr({x: '412.6',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_eq');
rsrGroups.push(CP_168);

var CP_169 = rsr.rect(422.4, 279.2, 9.7, 18.4);
CP_169.attr({x: '422.4',y: '279.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_es');
rsrGroups.push(CP_169);

var CP_170 = rsr.rect(305.2, 237.2, 9.8, 19.2);
CP_170.attr({x: '305.2',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_eu');
rsrGroups.push(CP_170);

var CP_171 = rsr.rect(315, 237.2, 9.8, 19.2);
CP_171.attr({x: '315',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ew');
rsrGroups.push(CP_171);

var CP_172 = rsr.rect(324.7, 237.2, 9.8, 19.2);
CP_172.attr({x: '324.7',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ey');
rsrGroups.push(CP_172);

var CP_173 = rsr.rect(334.5, 237.2, 9.8, 19.2);
CP_173.attr({x: '334.5',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fa');
rsrGroups.push(CP_173);

var CP_174 = rsr.rect(344.2, 237.2, 9.8, 19.2);
CP_174.attr({x: '344.2',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fc');
rsrGroups.push(CP_174);

var CP_175 = rsr.rect(354, 237.2, 9.8, 19.2);
CP_175.attr({x: '354',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fe');
rsrGroups.push(CP_175);

var CP_176 = rsr.rect(363.8, 237.2, 9.8, 19.2);
CP_176.attr({x: '363.8',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fg');
rsrGroups.push(CP_176);

var CP_177 = rsr.rect(373.5, 237.2, 9.8, 19.2);
CP_177.attr({x: '373.5',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fi');
rsrGroups.push(CP_177);

var CP_178 = rsr.rect(383.3, 237.2, 9.8, 19.2);
CP_178.attr({x: '383.3',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fk');
rsrGroups.push(CP_178);

var CP_179 = rsr.rect(393.1, 237.2, 9.8, 19.2);
CP_179.attr({x: '393.1',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fm');
rsrGroups.push(CP_179);

var CP_180 = rsr.rect(402.8, 237.2, 9.8, 19.2);
CP_180.attr({x: '402.8',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fo');
rsrGroups.push(CP_180);

var CP_181 = rsr.rect(412.6, 237.2, 9.8, 19.2);
CP_181.attr({x: '412.6',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fq');
rsrGroups.push(CP_181);

var CP_182 = rsr.rect(422.3, 237.2, 9.8, 19.2);
CP_182.attr({x: '422.3',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_no');
rsrGroups.push(CP_182);

var CP_183 = rsr.rect(305.2, 218.1, 9.8, 19.2);
CP_183.attr({x: '305.2',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cv');
rsrGroups.push(CP_183);

var CP_184 = rsr.rect(315, 218.1, 9.8, 19.2);
CP_184.attr({x: '315',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ev');
rsrGroups.push(CP_184);

var CP_185 = rsr.rect(324.7, 218.1, 9.8, 19.2);
CP_185.attr({x: '324.7',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ex');
rsrGroups.push(CP_185);

var CP_186 = rsr.rect(334.5, 218.1, 9.8, 19.2);
CP_186.attr({x: '334.5',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ez');
rsrGroups.push(CP_186);

var CP_187 = rsr.rect(344.2, 218.1, 9.8, 19.2);
CP_187.attr({x: '344.2',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fb');
rsrGroups.push(CP_187);

var CP_188 = rsr.rect(354, 218.1, 9.8, 19.2);
CP_188.attr({x: '354',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fd');
rsrGroups.push(CP_188);

var CP_189 = rsr.rect(363.8, 218.1, 9.8, 19.2);
CP_189.attr({x: '363.8',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ff');
rsrGroups.push(CP_189);

var CP_190 = rsr.rect(373.5, 218.1, 9.8, 19.2);
CP_190.attr({x: '373.5',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fh');
rsrGroups.push(CP_190);

var CP_191 = rsr.rect(383.3, 218.1, 9.8, 19.2);
CP_191.attr({x: '383.3',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fj');
rsrGroups.push(CP_191);

var CP_192 = rsr.rect(393.1, 218.1, 9.8, 19.2);
CP_192.attr({x: '393.1',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fl');
rsrGroups.push(CP_192);

var CP_193 = rsr.rect(402.8, 218.1, 9.8, 19.2);
CP_193.attr({x: '402.8',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fn');
rsrGroups.push(CP_193);

var CP_194 = rsr.rect(412.6, 218.1, 9.8, 19.2);
CP_194.attr({x: '412.6',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fp');
rsrGroups.push(CP_194);

var CP_195 = rsr.rect(422.3, 218.1, 9.8, 19.2);
CP_195.attr({x: '422.3',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fr');
rsrGroups.push(CP_195);

var CP_196 = rsr.rect(305.2, 178, 9.7, 18.4);
CP_196.attr({x: '305.2',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cu');
rsrGroups.push(CP_196);

var CP_197 = rsr.rect(314.9, 178, 9.7, 18.4);
CP_197.attr({x: '314.9',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_os');
rsrGroups.push(CP_197);

var CP_198 = rsr.rect(324.6, 178, 9.7, 18.4);
CP_198.attr({x: '324.6',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ou');
rsrGroups.push(CP_198);

var CP_199 = rsr.rect(334.4, 178, 9.7, 18.4);
CP_199.attr({x: '334.4',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ow');
rsrGroups.push(CP_199);

var CP_200 = rsr.rect(344.1, 178, 9.7, 18.4);
CP_200.attr({x: '344.1',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oy');
rsrGroups.push(CP_200);

var CP_201 = rsr.rect(353.8, 178, 9.7, 18.4);
CP_201.attr({x: '353.8',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pa');
rsrGroups.push(CP_201);

var CP_202 = rsr.rect(363.5, 178, 9.7, 18.4);
CP_202.attr({x: '363.5',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pc');
rsrGroups.push(CP_202);

var CP_203 = rsr.rect(373.3, 178, 9.7, 18.4);
CP_203.attr({x: '373.3',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pe');
rsrGroups.push(CP_203);

var CP_204 = rsr.rect(383, 178, 9.7, 18.4);
CP_204.attr({x: '383',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pg');
rsrGroups.push(CP_204);

var CP_205 = rsr.rect(392.8, 178, 9.7, 18.4);
CP_205.attr({x: '392.8',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pi');
rsrGroups.push(CP_205);

var CP_206 = rsr.rect(402.5, 178, 9.7, 18.4);
CP_206.attr({x: '402.5',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pk');
rsrGroups.push(CP_206);

var CP_207 = rsr.rect(305.2, 159.6, 9.7, 18.4);
CP_207.attr({x: '305.2',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ct');
rsrGroups.push(CP_207);

var CP_208 = rsr.rect(314.9, 159.6, 9.7, 18.4);
CP_208.attr({x: '314.9',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_or');
rsrGroups.push(CP_208);

var CP_209 = rsr.rect(324.6, 159.5, 9.7, 18.4);
CP_209.attr({x: '324.6',y: '159.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ot');
rsrGroups.push(CP_209);

var CP_210 = rsr.rect(334.4, 159.6, 9.7, 18.4);
CP_210.attr({x: '334.4',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ov');
rsrGroups.push(CP_210);

var CP_211 = rsr.rect(344.1, 159.5, 9.7, 18.4);
CP_211.attr({x: '344.1',y: '159.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ox');
rsrGroups.push(CP_211);

var CP_212 = rsr.rect(353.8, 159.5, 9.7, 18.4);
CP_212.attr({x: '353.8',y: '159.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oz');
rsrGroups.push(CP_212);

var CP_213 = rsr.rect(363.5, 159.6, 9.7, 18.4);
CP_213.attr({x: '363.5',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pb');
rsrGroups.push(CP_213);

var CP_214 = rsr.rect(373.3, 159.6, 9.7, 18.4);
CP_214.attr({x: '373.3',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pd');
rsrGroups.push(CP_214);

var CP_215 = rsr.rect(383, 159.6, 9.7, 18.4);
CP_215.attr({x: '383',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pf');
rsrGroups.push(CP_215);

var CP_216 = rsr.rect(392.8, 159.6, 9.7, 18.4);
CP_216.attr({x: '392.8',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ph');
rsrGroups.push(CP_216);

var CP_217 = rsr.rect(402.5, 159.6, 9.7, 18.4);
CP_217.attr({x: '402.5',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pj');
rsrGroups.push(CP_217);

var CP_218 = rsr.rect(414.1, 448.9, 18.4, 9.5);
CP_218.attr({x: '414.1',y: '448.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_op');
rsrGroups.push(CP_218);

var CP_219 = rsr.rect(414.1, 439.5, 18.4, 9.5);
CP_219.attr({x: '414.1',y: '439.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oo');
rsrGroups.push(CP_219);

var CP_220 = rsr.rect(450.5, 423.1, 17.3, 10);
CP_220.attr({x: '450.5',y: '423.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kz');
rsrGroups.push(CP_211);

var CP_221 = rsr.rect(450.5, 413.1, 17.3, 10);
CP_221.attr({x: '450.5',y: '413.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kt');
rsrGroups.push(CP_212);

var CP_222 = rsr.rect(450.5, 393.2, 19.7, 19.9);
CP_222.attr({x: '450.5',y: '393.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_la');
rsrGroups.push(CP_213);

var CP_223 = rsr.rect(450.5, 383.3, 19.7, 10);
CP_223.attr({x: '450.5',y: '383.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ks');
rsrGroups.push(CP_214);

var CP_224 = rsr.rect(450.5, 373.3, 19.7, 10);
CP_224.attr({x: '450.5',y: '373.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kr');
rsrGroups.push(CP_215);

var CP_225 = rsr.rect(450.5, 363.4, 17.3, 10);
CP_225.attr({x: '450.5',y: '363.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kq');
rsrGroups.push(CP_216);

var CP_226 = rsr.rect(450.5, 353.4, 17.3, 10);
CP_226.attr({x: '450.5',y: '353.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kp');
rsrGroups.push(CP_217);

//Faltan 227 228 229

var CP_230 = rsr.rect(450.5, 251.3, 19.7, 10.3);
CP_230.attr({x: '450.5',y: '251.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lp');
rsrGroups.push(CP_230);

var CP_231 = rsr.rect(450.5, 241, 19.7, 10.3);
CP_231.attr({x: '450.5',y: '241',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kl');
rsrGroups.push(CP_231);

var CP_232 = rsr.rect(450.5, 230.6, 17.3, 10.3);
CP_232.attr({x: '450.5',y: '230.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kk');
rsrGroups.push(CP_232);

var CP_233 = rsr.rect(450.5, 220.2, 17.3, 10.3);
CP_233.attr({x: '450.5',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kj');
rsrGroups.push(CP_233);

var CP_234 = rsr.rect(467.8, 414.3, 15, 18.6);
CP_234.attr({x: '467.8',y: '414.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lc');
rsrGroups.push(CP_234);

var CP_235A = rsr.rect(482.9, 423.1, 17.4, 10);
CP_235A.attr({x: '482.9',y: '423.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ky');
rsrGroups.push(CP_235A);

var CP_235B = rsr.rect(482.9, 413.1, 17.4, 10);
CP_235B.attr({x: '482.9',y: '413.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kx');
rsrGroups.push(CP_235B);

var CP_236 = rsr.rect(480.6, 393.2, 19.7, 19.9);
CP_236.attr({x: '480.6',y: '393.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lb');
rsrGroups.push(CP_236);

var CP_237 = rsr.rect(480.6, 383.3, 19.7, 10);
CP_237.attr({x: '480.6',y: '383.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kw');
rsrGroups.push(CP_237);

var CP_238 = rsr.rect(480.6, 373.3, 19.7, 10);
CP_238.attr({x: '480.6',y: '373.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kv');
rsrGroups.push(CP_238);

var CP_239 = rsr.rect(482.9, 363.4, 17.4, 10);
CP_239.attr({x: '482.9',y: '363.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ku');
rsrGroups.push(CP_239);

var CP_240 = rsr.rect(482.9, 353.4, 17.4, 10);
CP_240.attr({x: '482.9',y: '353.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ld');
rsrGroups.push(CP_240);

var CP_241 = rsr.rect(482.9, 292.8, 17.3, 10.3);
CP_241.attr({x: '482.9',y: '292.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lo');
rsrGroups.push(CP_241);

var CP_242 = rsr.rect(482.9, 282.4, 17.3, 10.3);
CP_242.attr({x: '482.9',y: '282.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ko');
rsrGroups.push(CP_242);

var CP_243 = rsr.rect(480.5, 261.7, 19.7, 20.7);
CP_243.attr({x: '480.5',y: '261.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lr');
rsrGroups.push(CP_243);

var CP_244 = rsr.rect(480.5, 251.3, 19.7, 10.3);
CP_244.attr({x: '480.5',y: '251.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kn');
rsrGroups.push(CP_244);

var CP_245 = rsr.rect(480.5, 241, 19.7, 10.3);
CP_245.attr({x: '480.5',y: '241',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_km');
rsrGroups.push(CP_245);

var CP_246 = rsr.rect(482.9, 230.6, 17.3, 10.3);
CP_246.attr({x: '482.9',y: '230.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lu');
rsrGroups.push(CP_246);

var CP_247 = rsr.rect(482.9, 220.2, 17.3, 10.3);
CP_247.attr({x: '482.9',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lt');
rsrGroups.push(CP_247);

var CP_248 = rsr.rect(470.1, 220.2, 10.3, 19.7);
CP_248.attr({x: '470.1',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fs');
rsrGroups.push(CP_248);

var CP_249 = rsr.rect(518.9, 417.4, 10.1, 18.7);
CP_249.attr({x: '518.9',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hc');
rsrGroups.push(CP_249);

var CP_250 = rsr.rect(529, 417.4, 10.1, 18.7);
CP_250.attr({x: '529',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_he');
rsrGroups.push(CP_250);

var CP_251 = rsr.rect(539.1, 417.4, 10.1, 18.7);
CP_251.attr({x: '539.1',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hg');
rsrGroups.push(CP_251);

var CP_252 = rsr.rect(549.2, 417.4, 10.1, 18.7);
CP_252.attr({x: '549.2',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hi');
rsrGroups.push(CP_252);

var CP_253 = rsr.rect(559.3, 417.4, 10.1, 18.7);
CP_253.attr({x: '559.3',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hk');
rsrGroups.push(CP_253);

var CP_254 = rsr.rect(569.4, 417.4, 10.1, 18.7);
CP_254.attr({x: '569.4',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hm');
rsrGroups.push(CP_254);

var CP_255 = rsr.rect(579.4, 417.4, 10.1, 18.7);
CP_255.attr({x: '579.4',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ho');
rsrGroups.push(CP_255);

var CP_256 = rsr.rect(589.5, 417.4, 10.1, 18.7);
CP_256.attr({x: '589.5',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hq');
rsrGroups.push(CP_256);

var CP_257 = rsr.rect(599.6, 417.4, 10.1, 18.7);
CP_257.attr({x: '599.6',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hs');
rsrGroups.push(CP_257);

var CP_258 = rsr.rect(609.6, 417.4, 10.1, 18.7);
CP_258.attr({x: '609.6',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hu');
rsrGroups.push(CP_258);

var CP_259 = rsr.rect(619.7, 417.4, 10.1, 18.7);
CP_259.attr({x: '619.7',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hw');
rsrGroups.push(CP_259);

var CP_260 = rsr.rect(629.8, 417.4, 10.1, 18.7);
CP_260.attr({x: '629.8',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hy');
rsrGroups.push(CP_260);

var CP_261 = rsr.rect(639.9, 417.4, 10.1, 18.7);
CP_261.attr({x: '639.9',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ia');
rsrGroups.push(CP_261);

var CP_262 = rsr.rect(649.9, 417.4, 10.1, 18.7);
CP_262.attr({x: '649.9',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ic');
rsrGroups.push(CP_262);

var CP_263 = rsr.rect(660, 417.4, 10.1, 18.7);
CP_263.attr({x: '660',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ie');
rsrGroups.push(CP_263);

var CP_264 = rsr.rect(518.9, 398.7, 10.1, 18.7);
CP_264.attr({x: '518.9',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hb');
rsrGroups.push(CP_264);

var CP_265 = rsr.rect(529, 398.7, 10.1, 18.7);
CP_265.attr({x: '529',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hd');
rsrGroups.push(CP_265);

var CP_266 = rsr.rect(539.1, 398.7, 10.1, 18.7);
CP_266.attr({x: '539.1',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hf');
rsrGroups.push(CP_266);

var CP_267 = rsr.rect(549.2, 398.7, 10.1, 18.7);
CP_267.attr({x: '549.2',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hh');
rsrGroups.push(CP_267);

var CP_268 = rsr.rect(559.3, 398.7, 10.1, 18.7);
CP_268.attr({x: '559.3',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hj');
rsrGroups.push(CP_268);

var CP_269 = rsr.rect(569.4, 398.7, 10.1, 18.7);
CP_269.attr({x: '569.4',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hl');
rsrGroups.push(CP_269);

var CP_270 = rsr.rect(579.4, 398.7, 10.1, 18.7);
CP_270.attr({x: '579.4',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hn');
rsrGroups.push(CP_270);

var CP_271 = rsr.rect(589.5, 398.7, 10.1, 18.7);
CP_271.attr({x: '589.5',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hp');
rsrGroups.push(CP_271);

var CP_272 = rsr.rect(599.6, 398.7, 10.1, 18.7);
CP_272.attr({x: '599.6',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hr');
rsrGroups.push(CP_272);

var CP_273 = rsr.rect(609.6, 398.7, 10.1, 18.7);
CP_273.attr({x: '609.6',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ht');
rsrGroups.push(CP_273);

var CP_274 = rsr.rect(619.7, 398.7, 10.1, 18.7);
CP_274.attr({x: '619.7',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hv');
rsrGroups.push(CP_274);

var CP_275 = rsr.rect(629.8, 398.7, 10.1, 18.7);
CP_275.attr({x: '629.8',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hx');
rsrGroups.push(CP_275);

var CP_276 = rsr.rect(639.9, 398.7, 10.1, 18.7);
CP_276.attr({x: '639.9',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hz');
rsrGroups.push(CP_276);

var CP_277 = rsr.rect(649.9, 398.7, 10.1, 18.7);
CP_277.attr({x: '649.9',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ib');
rsrGroups.push(CP_277);

var CP_278 = rsr.rect(660, 398.7, 10.1, 18.7);
CP_278.attr({x: '660',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_id');
rsrGroups.push(CP_278);

var CP_279 = rsr.rect(518.9, 358.2, 10.1, 18);
CP_279.attr({x: '518.9',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ha');
rsrGroups.push(CP_279);

var CP_280 = rsr.rect(529, 358.2, 10.1, 18);
CP_280.attr({x: '529',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ig');
rsrGroups.push(CP_280);

var CP_281 = rsr.rect(539.1, 358.2, 10.1, 18);
CP_281.attr({x: '539.1',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ii');
rsrGroups.push(CP_281);

var CP_282 = rsr.rect(549.2, 358.2, 10.1, 18.1);
CP_282.attr({x: '549.2',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ik');
rsrGroups.push(CP_282);

var CP_283 = rsr.rect(559.3, 358.2, 10.1, 18.1);
CP_283.attr({x: '559.3',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_im');
rsrGroups.push(CP_283);

var CP_284 = rsr.rect(569.4, 358.2, 10.1, 18.1);
CP_284.attr({x: '569.4',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_io');
rsrGroups.push(CP_284);

var CP_285 = rsr.rect(579.4, 358.2, 10.1, 18.1);
CP_285.attr({x: '579.4',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_iq');
rsrGroups.push(CP_285);

var CP_286 = rsr.rect(589.5, 358.2, 10.1, 18.1);
CP_286.attr({x: '589.5',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_is');
rsrGroups.push(CP_286);

var CP_287 = rsr.rect(599.6, 358.2, 10.1, 18.1);
CP_287.attr({x: '599.6',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_iu');
rsrGroups.push(CP_287);

var CP_288 = rsr.rect(609.6, 358.2, 10.1, 18.1);
CP_288.attr({x: '609.6',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_iw');
rsrGroups.push(CP_288);

var CP_289 = rsr.rect(619.7, 358.2, 10.1, 18.1);
CP_289.attr({x: '619.7',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_iy');
rsrGroups.push(CP_289);

var CP_290 = rsr.rect(629.8, 358.2, 10.1, 18.1);
CP_290.attr({x: '629.8',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ja');
rsrGroups.push(CP_290);

var CP_291 = rsr.rect(639.9, 358.2, 10.1, 18.1);
CP_291.attr({x: '639.9',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jc');
rsrGroups.push(CP_291);

var CP_292 = rsr.rect(650, 358.2, 10.1, 18.1);
CP_292.attr({x: '650',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_je');
rsrGroups.push(CP_292);

var CP_293 = rsr.rect(660, 358.2, 10.1, 18.1);
CP_293.attr({x: '660',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jg');CP_280
rsrGroups.push(CP_293);

var CP_294 = rsr.rect(518.9, 340, 10.1, 18.3);
CP_294.attr({x: '518.9',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gz');
rsrGroups.push(CP_294);

var CP_295 = rsr.rect(529, 340, 10.1, 18.3);
CP_295.attr({x: '529',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_if');
rsrGroups.push(CP_295);

var CP_296 = rsr.rect(539.1, 340, 10.1, 18.3);
CP_296.attr({x: '539.1',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ih');
rsrGroups.push(CP_296);

var CP_297 = rsr.rect(549.2, 340, 10.1, 18.3);
CP_297.attr({x: '549.2',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ij');
rsrGroups.push(CP_297);

var CP_298 = rsr.rect(559.3, 340, 10.1, 18.3);
CP_298.attr({x: '559.3',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_il');
rsrGroups.push(CP_298);

var CP_299 = rsr.rect(569.4, 340, 10.1, 18.3);
CP_299.attr({x: '569.4',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_in');
rsrGroups.push(CP_299);

var CP_300 = rsr.rect(579.4, 340, 10.1, 18.2);
CP_300.attr({x: '579.4',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ip');
rsrGroups.push(CP_300);

var CP_301 = rsr.rect(589.5, 340, 10.1, 18.3);
CP_301.attr({x: '589.5',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ir');
rsrGroups.push(CP_301);

var CP_302 = rsr.rect(599.6, 340, 10.1, 18.2);
CP_302.attr({x: '599.6',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_it');
rsrGroups.push(CP_302);

var CP_303 = rsr.rect(609.6, 340, 10.1, 18.3);
CP_303.attr({x: '609.6',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_iv');
rsrGroups.push(CP_303);

var CP_304 = rsr.rect(619.7, 340, 10.1, 18.3);
CP_304.attr({x: '619.7',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ix');
rsrGroups.push(CP_304);

var CP_305 = rsr.rect(629.8, 340, 10.1, 18.3);
CP_305.attr({x: '629.8',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_iz');
rsrGroups.push(CP_305);

var CP_306 = rsr.rect(639.9, 340, 10.1, 18.3);
CP_306.attr({x: '639.9',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jb');
rsrGroups.push(CP_306);

var CP_307 = rsr.rect(650, 340.1, 10.1, 18.2);
CP_307.attr({x: '650',y: '340.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jd');
rsrGroups.push(CP_307);

var CP_308 = rsr.rect(660, 340.1, 10.1, 18.2);
CP_308.attr({x: '660',y: '340.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jf');
rsrGroups.push(CP_308);

var CP_309 = rsr.rect(518.9, 297.5, 10.1, 18.4);
CP_309.attr({x: '518.9',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fw');
rsrGroups.push(CP_309);

var CP_310 = rsr.rect(529, 297.5, 10.1, 18.4);
CP_310.attr({x: '529',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fy');
rsrGroups.push(CP_310);

var CP_311 = rsr.rect(539.1, 297.5, 10.1, 18.4);
CP_311.attr({x: '539.1',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ga');
rsrGroups.push(CP_311);

var CP_312 = rsr.rect(549.2, 297.5, 10.1, 18.4);
CP_312.attr({x: '549.2',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gc');
rsrGroups.push(CP_312);

var CP_313 = rsr.rect(559.3, 297.5, 10.1, 18.4);
CP_313.attr({x: '559.3',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ge');
rsrGroups.push(CP_313);

var CP_314 = rsr.rect(569.4, 297.5, 10.1, 18.4);
CP_314.attr({x: '569.4',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gg');
rsrGroups.push(CP_314);

var CP_315 = rsr.rect(579.4, 297.5, 10.1, 18.4);
CP_315.attr({x: '579.4',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gi');
rsrGroups.push(CP_315);

var CP_316 = rsr.rect(589.5, 297.5, 10.1, 18.4);
CP_316.attr({x: '589.5',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gk');
rsrGroups.push(CP_316);

var CP_317 = rsr.rect(599.6, 297.5, 10.1, 18.4);
CP_317.attr({x: '599.6',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gm');
rsrGroups.push(CP_317);

var CP_318 = rsr.rect(609.6, 297.5, 10.1, 18.4);
CP_318.attr({x: '609.6',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_go');
rsrGroups.push(CP_318);

var CP_319 = rsr.rect(619.7, 297.5, 10.1, 18.4);
CP_319.attr({x: '619.7',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gq');
rsrGroups.push(CP_319);

var CP_320 = rsr.rect(629.8, 297.5, 10.1, 18.4);
CP_320.attr({x: '629.8',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gs');
rsrGroups.push(CP_320);

var CP_321 = rsr.rect(639.9, 297.5, 10.1, 18.4);
CP_321.attr({x: '639.9',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gu');
rsrGroups.push(CP_321);

var CP_322 = rsr.rect(650, 297.5, 10.1, 18.4);
CP_322.attr({x: '650',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gw');
rsrGroups.push(CP_322);

var CP_323 = rsr.rect(660, 297.5, 10.1, 18.4);
CP_323.attr({x: '660',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gy');
rsrGroups.push(CP_323);

var CP_324 = rsr.rect(518.9, 279.1, 10.1, 18.4);
CP_324.attr({x: '518.9',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fv');
rsrGroups.push(CP_324);

var CP_325 = rsr.rect(529, 279.1, 10.1, 18.4);
CP_325.attr({x: '529',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fx');
rsrGroups.push(CP_325);

var CP_326 = rsr.rect(539.1, 279.1, 10.1, 18.4);
CP_326.attr({x: '539.1',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fz');
rsrGroups.push(CP_326);

var CP_327 = rsr.rect(549.2, 279.1, 10.1, 18.4);
CP_327.attr({x: '549.2',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gb');
rsrGroups.push(CP_327);

var CP_328 = rsr.rect(559.3, 279.1, 10.1, 18.4);
CP_328.attr({x: '559.3',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gd');
rsrGroups.push(CP_328);

var CP_329 = rsr.rect(569.4, 279.1, 10.1, 18.4);
CP_329.attr({x: '569.4',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gf');
rsrGroups.push(CP_329);

var CP_330 = rsr.rect(579.4, 279.1, 10.1, 18.4);
CP_330.attr({x: '579.4',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gh');
rsrGroups.push(CP_330);

var CP_331 = rsr.rect(589.5, 279.1, 10.1, 18.4);
CP_331.attr({x: '589.5',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gj');
rsrGroups.push(CP_331);

var CP_332 = rsr.rect(599.6, 279.1, 10.1, 18.4);
CP_332.attr({x: '599.6',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gl');
rsrGroups.push(CP_332);

var CP_333 = rsr.rect(609.6, 279.1, 10.1, 18.4);
CP_333.attr({x: '609.6',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gn');
rsrGroups.push(CP_333);

var CP_334 = rsr.rect(619.7, 279.1, 10.1, 18.4);
CP_334.attr({x: '619.7',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gp');
rsrGroups.push(CP_334);

var CP_335 = rsr.rect(629.8, 279.1, 10.1, 18.4);
CP_335.attr({x: '629.8',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gr');
rsrGroups.push(CP_335);

var CP_336 = rsr.rect(639.9, 279.1, 10.1, 18.4);
CP_336.attr({x: '639.9',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gt');
rsrGroups.push(CP_336);

var CP_337 = rsr.rect(650, 279.1, 10.1, 18.4);
CP_337.attr({x: '650',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gv');
rsrGroups.push(CP_337);

var CP_338 = rsr.rect(660, 279.1, 10.1, 18.4);
CP_338.attr({x: '660',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gx');
rsrGroups.push(CP_338);

var CP_339 = rsr.rect(518.9, 238.4, 10.1, 18.1);
CP_339.attr({x: '518.9',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fu');
rsrGroups.push(CP_339);

var CP_340 = rsr.rect(529, 238.4, 10.1, 18.1);
CP_340.attr({x: '529',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ji');
rsrGroups.push(CP_340);

var CP_341 = rsr.rect(539.1, 238.4, 10.1, 18.1);
CP_341.attr({x: '539.1',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jk');
rsrGroups.push(CP_341);

var CP_342 = rsr.rect(549.2, 238.4, 10.1, 18.1);
CP_342.attr({x: '549.2',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jm');
rsrGroups.push(CP_342);

var CP_343 = rsr.rect(559.3, 238.4, 10.1, 18.1);
CP_343.attr({x: '559.3',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jo');
rsrGroups.push(CP_343);

var CP_344 = rsr.rect(569.4, 238.4, 10.1, 18.1);
CP_344.attr({x: '569.4',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jq');
rsrGroups.push(CP_344);

var CP_345 = rsr.rect(579.4, 238.4, 10.1, 18.1);
CP_345.attr({x: '579.4',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_js');
rsrGroups.push(CP_345);

var CP_346 = rsr.rect(589.5, 238.4, 10.1, 18.1);
CP_346.attr({x: '589.5',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ju');
rsrGroups.push(CP_346);

var CP_347 = rsr.rect(599.6, 238.4, 10.1, 18.1);
CP_347.attr({x: '599.6',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jw');
rsrGroups.push(CP_347);

var CP_348 = rsr.rect(609.6, 238.4, 10.1, 18.1);
CP_348.attr({x: '609.6',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jy');
rsrGroups.push(CP_348);

var CP_349 = rsr.rect(619.7, 238.4, 10.1, 18.1);
CP_349.attr({x: '619.7',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ka');
rsrGroups.push(CP_349);

var CP_350 = rsr.rect(629.8, 238.4, 10.1, 18.1);
CP_350.attr({x: '629.8',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kc');
rsrGroups.push(CP_350);

var CP_351 = rsr.rect(639.9, 238.4, 10.1, 18.1);
CP_351.attr({x: '639.9',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ke');
rsrGroups.push(CP_351);

var CP_352 = rsr.rect(650, 238.4, 10.1, 18.1);
CP_352.attr({x: '650',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kg');
rsrGroups.push(CP_352);

var CP_353 = rsr.rect(660, 238.4, 10.1, 18.1);
CP_353.attr({x: '660',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ki');
rsrGroups.push(CP_353);

var CP_354 = rsr.rect(518.9, 220.2, 10.1, 18.1);
CP_354.attr({x: '518.9',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ft');
rsrGroups.push(CP_354);

var CP_355 = rsr.rect(529, 220.2, 10.1, 18.1);
CP_355.attr({x: '529',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jh');
rsrGroups.push(CP_355);

var CP_356 = rsr.rect(539.1, 220.2, 10.1, 18.1);
CP_356.attr({x: '539.1',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jj');
rsrGroups.push(CP_356);

var CP_357 = rsr.rect(549.2, 220.2, 10.1, 18.1);
CP_357.attr({x: '549.2',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jl');
rsrGroups.push(CP_357);

var CP_358 = rsr.rect(559.3, 220.2, 10.1, 18.1);
CP_358.attr({x: '559.3',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jn');
rsrGroups.push(CP_358);

var CP_359 = rsr.rect(569.4, 220.2, 10.1, 18.1);
CP_359.attr({x: '569.4',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jp');
rsrGroups.push(CP_359);

var CP_360 = rsr.rect(579.4, 220.2, 10.1, 18.1);
CP_360.attr({x: '579.4',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jr');
rsrGroups.push(CP_360);

var CP_361 = rsr.rect(589.5, 220.2, 10.1, 18.1);
CP_361.attr({x: '589.5',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jt');
rsrGroups.push(CP_361);

var CP_362 = rsr.rect(599.6, 220.2, 10.1, 18.1);
CP_362.attr({x: '599.6',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jv');
rsrGroups.push(CP_362);

var CP_363 = rsr.rect(609.6, 220.2, 10.1, 18.1);
CP_363.attr({x: '609.6',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jx');
rsrGroups.push(CP_363);

var CP_364 = rsr.rect(619.7, 220.2, 10.1, 18.1);
CP_364.attr({x: '619.7',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jz');
rsrGroups.push(CP_364);

var CP_365 = rsr.rect(629.8, 220.2, 10.1, 18.1);
CP_365.attr({x: '629.8',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kb');
rsrGroups.push(CP_365);

var CP_366 = rsr.rect(639.9, 220.2, 10.1, 18.1);
CP_366.attr({x: '639.9',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kd');
rsrGroups.push(CP_366);

var CP_367 = rsr.rect(650, 220.2, 10.1, 18.1);
CP_367.attr({x: '650',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kf');
rsrGroups.push(CP_367);

var CP_368 = rsr.rect(660, 220.2, 10.1, 18.1);
CP_368.attr({x: '660',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kh');
rsrGroups.push(CP_368);

var CP_369 = rsr.rect(686.2, 435.5, 17.3, 9.8);
CP_369.attr({x: '686.2',y: '435.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dg');
rsrGroups.push(CP_369);

var CP_370 = rsr.rect(718.6, 435.5, 17.3, 9.8);
CP_370.attr({x: '718.6',y: '435.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dh');
rsrGroups.push(CP_370);

var CP_371 = rsr.rect(686.2, 393.5, 19.7, 19.9);
CP_371.attr({x: '686.2',y: '393.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ll');
rsrGroups.push(CP_371);

var CP_372 = rsr.rect(686.2, 383.6, 19.7, 10);
CP_372.attr({x: '686.2',y: '383.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lh');
rsrGroups.push(CP_372);

var CP_373 = rsr.rect(686.2, 373.6, 19.7, 10);
CP_373.attr({x: '686.2',y: '373.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lg');
rsrGroups.push(CP_373);

var CP_374 = rsr.rect(686.2, 363.7, 17.3, 10);
CP_374.attr({x: '686.2',y: '363.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lf');
rsrGroups.push(CP_374);

var CP_375 = rsr.rect(686.2, 353.7, 17.3, 10);
CP_375.attr({x: '686.2',y: '353.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_le');
rsrGroups.push(CP_375);

// Faltan 376, 377, 378

var CP_379 = rsr.rect(686.2, 251.5, 19.7, 10.3);
CP_379.attr({x: '686.2',y: '251.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ni');
rsrGroups.push(CP_379);

var CP_380 = rsr.rect(686.2, 241.1, 19.7, 10.3);
CP_380.attr({x: '686.2',y: '241.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nd');
rsrGroups.push(CP_380);

var CP_381 = rsr.rect(686.2, 230.7, 17.3, 10.3);
CP_381.attr({x: '686.2',y: '230.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nc');
rsrGroups.push(CP_381);

var CP_382 = rsr.rect(686.2, 220.4, 17.3, 10.3);
CP_382.attr({x: '686.2',y: '220.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nb');
rsrGroups.push(CP_382);

var CP_383 = rsr.rect(705.9, 393.5, 10.3, 19.7);
CP_383.attr({x: '705.9',y: '393.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lv');
rsrGroups.push(CP_383);

var CP_384 = rsr.rect(716.3, 403.6, 19.7, 10);
CP_384.attr({x: '716.3',y: '403.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lk');
rsrGroups.push(CP_384);

var CP_385 = rsr.rect(716.3, 393.6, 19.7, 10);
CP_385.attr({x: '716.3',y: '393.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lk');
rsrGroups.push(CP_385);

var CP_386 = rsr.rect(716.3, 383.6, 19.7, 10);
CP_386.attr({x: '716.3',y: '383.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lk');
rsrGroups.push(CP_386);

var CP_387 = rsr.rect(716.3, 373.6, 19.7, 10);
CP_387.attr({x: '716.3',y: '373.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lj');
rsrGroups.push(CP_387);

var CP_388 = rsr.rect(718.6, 363.7, 17.4, 10);
CP_388.attr({x: '718.6',y: '363.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_li');
rsrGroups.push(CP_388);

var CP_389 = rsr.rect(718.6, 353.7, 17.4, 10);
CP_389.attr({x: '718.6',y: '353.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ln');
rsrGroups.push(CP_389);

var CP_390 = rsr.rect(718.6, 292.9, 17.3, 10.3);
CP_390.attr({x: '718.6',y: '292.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nh');
rsrGroups.push(CP_390);

var CP_391 = rsr.rect(718.6, 282.6, 17.3, 10.3);
CP_391.attr({x: '718.6',y: '282.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ng');
rsrGroups.push(CP_391);

var CP_392 = rsr.rect(716.3, 261.9, 19.7, 20.7);
CP_392.attr({x: '716.3',y: '261.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nk');
rsrGroups.push(CP_392);

var CP_393 = rsr.rect(716.3, 251.5, 19.7, 10.3);
CP_393.attr({x: '716.3',y: '251.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nf');
rsrGroups.push(CP_393);

var CP_394 = rsr.rect(716.3, 241.1, 19.7, 10.3);
CP_394.attr({x: '716.3',y: '241.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ne');
rsrGroups.push(CP_394);

var CP_395 = rsr.rect(718.6, 220.4, 17.3, 10.3);
CP_395.attr({x: '718.6',y: '220.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nm');
rsrGroups.push(CP_395);

var CP_396 = rsr.rect(718.6, 230.7, 17.3, 10.3);
CP_396.attr({x: '718.6',y: '230.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nn');
rsrGroups.push(CP_396);

var CP_397 = rsr.rect(705.9, 220.4, 10.3, 19.7);
CP_397.attr({x: '705.9',y: '220.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lv');
rsrGroups.push(CP_397);

var CP_398 = rsr.rect(755.3, 397.6, 9.8, 19.9);
CP_398.attr({x: '755.3',y: '397.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mh');
rsrGroups.push(CP_398);

var CP_399 = rsr.rect(765.1, 397.6, 9.8, 19.9);
CP_399.attr({x: '765.1',y: '397.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mg');
rsrGroups.push(CP_399);

var CP_400 = rsr.rect(774.8, 397.6, 9.8, 19.9);
CP_400.attr({x: '774.8',y: '397.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mf');
rsrGroups.push(CP_400);

var CP_401 = rsr.rect(784.6, 397.6, 9.8, 16.8);
CP_401.attr({x: '784.6',y: '397.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_me');
rsrGroups.push(CP_401);

var CP_402 = rsr.rect(754.8, 358.5, 10, 17.9);
CP_402.attr({x: '754.8',y: '358.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mo');
rsrGroups.push(CP_402);

var CP_403 = rsr.rect(764.8, 358.5, 10, 17.9);
CP_403.attr({x: '764.8',y: '358.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mn');
rsrGroups.push(CP_403);

var CP_404 = rsr.rect(774.8, 358.5, 10, 17.9);
CP_404.attr({x: '774.8',y: '358.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mm');
rsrGroups.push(CP_404);

var CP_405 = rsr.rect(784.9, 358.5, 10, 17.9);
CP_405.attr({x: '784.9',y: '358.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ml');
rsrGroups.push(CP_405);

var CP_406 = rsr.rect(754.8, 340.6, 10, 17.9);
CP_406.attr({x: '754.8',y: '340.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mr');CP_409
rsrGroups.push(CP_406);

var CP_407 = rsr.rect(764.8, 340.6, 10, 17.9);
CP_407.attr({x: '764.8',y: '340.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mq');
rsrGroups.push(CP_407);

var CP_408 = rsr.rect(774.8, 340.6, 10, 17.9);
CP_408.attr({x: '774.8',y: '340.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mp');
rsrGroups.push(CP_408);

var CP_409 = rsr.rect(784.9, 340.6, 10, 17.9);
CP_409.attr({x: '784.9',y: '340.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mk');
rsrGroups.push(CP_409);

var CP_410 = rsr.rect(794.8, 340.6, 10, 17.9);
CP_410.attr({x: '794.8',y: '340.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mj');
rsrGroups.push(CP_410);

var CP_411 = rsr.rect(804.8, 340.6, 10, 17.9);
CP_411.attr({x: '804.8',y: '340.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mi');
rsrGroups.push(CP_411);

var CP_412 = rsr.rect(753.4, 295.7, 10.2, 18.3);
CP_412.attr({x: '753.4',y: '295.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mv');
rsrGroups.push(CP_412);

var CP_413 = rsr.rect(763.7, 295.8, 10.2, 18.3);
CP_413.attr({x: '763.7',y: '295.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mt');
rsrGroups.push(CP_413);

var CP_414 = rsr.rect(773.9, 295.8, 10.2, 18.3);
CP_414.attr({x: '773.9',y: '295.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_md');
rsrGroups.push(CP_414);

var CP_415 = rsr.rect(784.1, 295.8, 10.2, 18.3);
CP_415.attr({x: '784.1',y: '295.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mb');
rsrGroups.push(CP_415);

var CP_416 = rsr.rect(794.3, 295.8, 10.2, 18.3);
CP_416.attr({x: '794.3',y: '295.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ma');
rsrGroups.push(CP_416);

var CP_417 = rsr.rect(804.5, 295.8, 10.2, 18.3);
CP_417.attr({x: '804.5',y: '295.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lz');
rsrGroups.push(CP_417);

var CP_418 = rsr.rect(753.4, 277.3, 10.2, 18.3);
CP_418.attr({x: '753.4',y: '277.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mw');
rsrGroups.push(CP_418);

var CP_419 = rsr.rect(763.7, 277.4, 10.2, 18.3);
CP_419.attr({x: '763.7',y: '277.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mu');
rsrGroups.push(CP_419);

var CP_420 = rsr.rect(773.9, 277.4, 10.2, 18.3);
CP_420.attr({x: '773.9',y: '277.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ms');
rsrGroups.push(CP_420);

var CP_421 = rsr.rect(784.1, 277.3, 10.2, 18.3);
CP_421.attr({x: '784.1',y: '277.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mc');
rsrGroups.push(CP_421);

var CP_422 = rsr.rect(753.1, 239.2, 10.3, 18.8);
CP_422.attr({x: '753.1',y: '239.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ly');
rsrGroups.push(CP_422);

var CP_423 = rsr.rect(763.4, 239.2, 10.3, 18.8);
CP_423.attr({x: '763.4',y: '239.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_my');
rsrGroups.push(CP_423);

var CP_424 = rsr.rect(773.7, 239.2, 10.3, 18.8);
CP_424.attr({x: '773.7',y: '239.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_na');
rsrGroups.push(CP_424);

var CP_425 = rsr.rect(784, 239.2, 10.3, 18.8);
CP_425.attr({x: '784',y: '239.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lw');
rsrGroups.push(CP_425);

var CP_426 = rsr.rect(753.1, 220.5, 10.3, 18.8);
CP_426.attr({x: '753.1',y: '220.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lx');
rsrGroups.push(CP_426);

var CP_427 = rsr.rect(763.4, 220.5, 10.3, 18.8);
CP_427.attr({x: '763.4',y: '220.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mx');
rsrGroups.push(CP_427);

var CP_428 = rsr.rect(773.7, 220.5, 10.3, 18.8);
CP_428.attr({x: '773.7',y: '220.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mz');
rsrGroups.push(CP_428);

//Terminan cajones

//Torre A

var TORRE_A = rsr.path("M236.7,181.2c0-26.2,0-52.4,0-78.6c16.4,0,32.8-0.1,49.2-0.1  c0.1,26.2,0.1,52.5,0.1,78.8h77.3c0.1,16.8,0.1,33.5,0.2,50.2c-25.9,0-51.8,0-77.7,0c0.1,27.5,0.2,54.9,0.4,82.4  c-16.5,0-32.9,0-49.3,0c0-27.5-0.1-54.9-0.1-82.4c-26.5-0.2-53.1-0.5-79.6-0.7V181C183.7,181.1,210.2,181.2,236.7,181.2z");
TORRE_A.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pl');

var PASO_NORTE_TORRE_A = rsr.path("M285.8,102.7c0-8.7,0-17.3-0.1-25.9c-16.4,0-32.8,0.1-49.2,0.1  c0,8.6,0,17.3,0,25.9C253,102.7,269.4,102.7,285.8,102.7z");
PASO_NORTE_TORRE_A.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_po');

var PASO_SUR_TORRE_A = rsr.path("M236.9,314v26.9c16.5-0.1,32.9-0.1,49.3-0.1c0-8.9,0.1-17.8,0.1-26.8");
PASO_SUR_TORRE_A.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pp');

var ELEVADORES_TORRE_A = rsr.path("M236.8,181.2c16.4,0.1,32.8,0.1,49.3,0.2c0,16.8-0.1,33.5-0.1,50.2  c-16.3,0-32.7,0-49.1,0C236.8,214.8,236.8,198.1,236.8,181.2z");
ELEVADORES_TORRE_A.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pq');

var LUZ_TORRE_A = rsr.rect(236.6, 163.1, 32.7, 18.1);
LUZ_TORRE_A.attr({x: '236.6',y: '163.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '01','stroke-opacity': '1'}).data('id', 'rect_cm');

//!--Torre A

// Torre B

var TORRE_B = rsr.path("M450.4,303.1c0-27.7,0-55.3,0.1-82.9c16.6,0,33.2,0,49.7,0  c0,27.6-0.1,55.2-0.1,82.8c25.9,0.1,51.7,0.1,77.5,0.1c0,16.8,0,33.6,0,50.4c-25.8,0-51.7,0-77.5,0c0,26.5,0,53,0,79.5  c-16.6,0-33.2,0-49.8,0c0-26.5,0-53.1,0-79.6l-78.9-0.8v-49.9L450.4,303.1z");
TORRE_B.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pm');

var PASO_NORTE_TORRE_B = rsr.path("M450.5,220.2c0-8.7,0-17.3,0-25.9c16.6,0,33.1,0.1,49.7,0.1  c0,8.6,0,17.3,0,25.9C483.6,220.2,467,220.2,450.5,220.2z");
PASO_NORTE_TORRE_B.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pr');

var ELEVADORES_TORRE_B = rsr.path("M450.4,303.1v50.2c16.6,0,33.2,0,49.8,0c-0.1-16.8-0.1-33.5-0.1-50.4  C483.5,303.1,466.9,303.1,450.4,303.1z");
ELEVADORES_TORRE_B.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qt');

var BODEGA_TORRE_B = rsr.rect(450.5, 261.7, 19.7, 20.7);
BODEGA_TORRE_B.attr({x: '450.5',y: '261.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lq');

var LUZ_TORRE_B = rsr.rect(450.5, 282.4, 32.4, 20.7);
LUZ_TORRE_B.attr({x: '450.5',y: '282.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ls');

// !--Torre B

// Torre C



var TORRE_C = rsr.path("M686.2,303.2c0-27.6,0-55.2,0-82.8c16.5,0,33,0,49.6,0  c0.1,27.7,0.1,55.3,0.1,83c26.2-0.1,52.4-0.1,78.6-0.2c0.1,16.8,0.2,33.7,0.2,50.4c-26.3,0-52.6,0-78.9,0c0,19.9,0.1,39.8,0.1,59.7  c-16.6,0-33.2,0-49.8,0c0-19.9-0.1-39.7-0.1-59.6c-26.3,0-52.7,0-79,0c0-16.8,0.1-33.7,0.1-50.5C633.6,303.2,660,303.2,686.2,303.2z  ");
TORRE_C.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pn');

var PASO_NORTE_TORRE_C = rsr.path("M686.2,220.2c0-8.7,0-17.3,0-25.9c16.6,0,33.1,0.1,49.7,0.1  c0,8.6,0,17.3,0,25.9C483.6,220.2,467,220.2,450.5,z");
PASO_NORTE_TORRE_C.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pr');

var PASO_SUR_TORRE_C = rsr.path("M 686.2,413.4 686.2,435.5 736,435.5 736.1,413.4  z");
PASO_SUR_TORRE_C.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qw');

var ELEVADORES_TORRE_C = rsr.path("M686.1,353.7c0-16.8,0-33.6,0-50.4c16.7,0,33.4,0,50.1,0  c-0.1,16.8-0.1,33.6-0.2,50.4C719.4,353.7,702.7,353.7,686.1,353.7z");
ELEVADORES_TORRE_C.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pu');

var BODEGA_TORRE_C = rsr.rect(686.2, 261.9, 19.7, 20.7);
BODEGA_TORRE_C.attr({x: '686.2',y: '261.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nj');

var LUZ_TORRE_C = rsr.rect(686.2, 282.6, 32.4, 20.7);
LUZ_TORRE_C.attr({x: '686.2',y: '282.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nl');

// !--Torre C

<?php for($j=1;$j<51;$j++){ ?>

	$('#CP_<?php echo $j; ?>').tooltip({title: "<?php echo $j; ?>",container: "body"}); 

	$('#CP_<?php echo $j; ?>').hover(function(eIn) {
    	$('#CP_<?php echo $j; ?>').attr( "fill", "#2096F3" );
    	//console.log("Entra a <?php echo $j; ?>");
	}, 
	function(eOut) {
	    $('#CP_<?php echo $j; ?>').attr( "fill", "none" );
	    //console.log("Sale de <?php echo $j; ?>");
	});

	$("#C<?php echo $j; ?>").hover(function(eIn) {
    	$('#CP_<?php echo $j; ?>').attr( "fill", "#2096F3" );
   		$('#CP_<?php echo $j; ?>').tooltip('show');
	}, 
	function(eOut) {
	    $('#CP_<?php echo $j; ?>').attr( "fill", "none" );
	    $('#CP_<?php echo $j; ?>').tooltip('hide');
	});

<?php } ?>

	

	

for (var i = 0; i < rsrGroups.length; i++) {

	// Change Yorkshire's fill colour to gold
    //rsrGroups[i].node.setAttribute('fill', 'none');

    /*rsrGroups[i].hover(function(eIn) {
    	this.node.setAttribute('fill', '#2096F3');
	}, 
	function(eOut) {
	    this.node.setAttribute('fill', 'none');
	});*/

    // Showing off
    /*rsrGroups[i].mouseover(function(e){
		this.node.setAttribute('fill', '#2096F3');
	});

	rsrGroups[i].mouseout(function(e){
		this.node.setAttribute('fill', 'none');
	});*/

	rsrGroups[i].click(function() {
		showInfoModal(this.data('numCajon'));
	});
}
	
});

</script>

