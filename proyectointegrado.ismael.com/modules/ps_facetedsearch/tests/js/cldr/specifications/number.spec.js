/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */
import {expect} from 'chai';
import NumberSpecification from '../../../../_dev/cldr/specifications/number';
import NumberSymbol from '../../../../_dev/cldr/number-symbol';

describe('NumberSpecification', () => {
  let symbol;
  beforeEach(() => {
    symbol = new NumberSymbol(
      '.',
      ',',
      ';',
      '%',
      '-',
      '+',
      'E',
      '×',
      '‰',
      '∞',
      'NaN',
    );
  });
  describe('validateData', () => {
    it('should throw if invalid positive pattern', () => {
      expect(() => {
        new NumberSpecification();
      }).to.throw('Invalid positivePattern');
    });

    it('should throw if invalid negative pattern', () => {
      expect(() => {
        new NumberSpecification(
          '#,##0.###',
        );
      }).to.throw('Invalid negativePattern');
    });

    it('should throw if invalid symbol', () => {
      expect(() => {
        new NumberSpecification(
          '#,##0.###',
          '-#,##0.###',
        );
      }).to.throw('Invalid symbol');
    });

    it('should throw if invalid maxFractionDigits', () => {
      expect(() => {
        new NumberSpecification(
          '#,##0.###',
          '-#,##0.###',
          symbol,
        );
      }).to.throw('Invalid maxFractionDigits');
    });

    it('should throw if invalid minFractionDigits', () => {
      expect(() => {
        new NumberSpecification(
          '#,##0.###',
          '-#,##0.###',
          symbol,
          3,
        );
      }).to.throw('Invalid minFractionDigits');
    });

    it('should throw if invalid groupingUsed', () => {
      expect(() => {
        new NumberSpecification(
          '#,##0.###',
          '-#,##0.###',
          symbol,
          3,
          0,
        );
      }).to.throw('Invalid groupingUsed');
    });

    it('should throw if invalid primaryGroupSize', () => {
      expect(() => {
        new NumberSpecification(
          '#,##0.###',
          '-#,##0.###',
          symbol,
          3,
          0,
          false,
        );
      }).to.throw('Invalid primaryGroupSize');
    });

    it('should throw if invalid secondaryGroupSize', () => {
      expect(() => {
        new NumberSpecification(
          '#,##0.###',
          '-#,##0.###',
          symbol,
          3,
          0,
          true,
          3,
        );
      }).to.throw('Invalid secondaryGroupSize');
    });

    it('should not throw if everything is ok', () => {
      expect(() => {
        new NumberSpecification(
          '#,##0.###',
          '-#,##0.###',
          symbol,
          3,
          0,
          true,
          3,
          3,
        );
      }).to.not.throw();
    });
  });
});
