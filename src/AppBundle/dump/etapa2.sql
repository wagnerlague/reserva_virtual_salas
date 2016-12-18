select 
		dep.dept_name as Departamento, 
		concat(emp.first_name,' ',emp.last_name) as Nome_completo, 
		DATEDIFF(depemp.to_date, depemp.from_date) AS Dias_trabalhados 
from
	employees emp
		inner join dept_emp depemp
			on emp.emp_no = depemp.emp_no
		inner join departments dep
			on dep.dept_no = depemp.dept_no
where dep.dept_no = 'd005'
Order by Dias_trabalhados desc limit 10 ;