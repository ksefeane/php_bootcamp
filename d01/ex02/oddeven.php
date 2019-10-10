#!/usr/bin/php
<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   oddeven.php                                        :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: ksefeane <marvin@42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2019/10/10 09:38:12 by ksefeane          #+#    #+#             */
/*   Updated: 2019/10/10 09:38:12 by ksefeane         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

echo "Enter a number: ";
while ($num = fgets(STDIN))
{
	$num = trim($num);
	if (is_numeric($num))
	{
		if ($num % 2 == 0)
			echo "The number $num is even";
		else
			echo "The number $num is odd";
	}
	else
		echo "'$num' is not a number";
	echo "\nEnter a number: ";
}
?>
