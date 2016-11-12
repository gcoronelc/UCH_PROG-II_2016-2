
chr_cuencodigo
chr_monecodigo
chr_sucucodigo
chr_emplcreacuenta
chr_cliecodigo
dec_cuensaldo
dtt_cuenfechacreacion
vch_cuenestado
int_cuencontmov
chr_cuenclave

select 
	chr_sucucodigo, 
	sum( case when chr_monecodigo = '01'
	     then dec_cuensaldo else 0.0 end ) soles,
	sum( case when chr_monecodigo = '02'
	     then dec_cuensaldo else 0.0 end ) dolares
from cuenta
group by chr_sucucodigo;


select sum(dec_cuensaldo)
from cuenta
where chr_sucucodigo='001'
and chr_monecodigo='01';


