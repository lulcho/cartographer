<?php

namespace Tackk\Cartographer;

class ChangeFrequency
{
    const ALWAYS = 'always';
    const HOURLY = 'hourly';
    const DAILY = 'daily';
    const WEEKLY = 'weekly';
    const MONTHLY = 'monthly';
    const YEARLY = 'yearly';
    const NEVER = 'never';
}

class Sitemap extends AbstractSitemap
{
    protected function getRootNodeName()
    {
        return 'urlset';
    }

    /**
     * Adds the URL to the urlset.
     * @param  string     $loc
     * @param  string|int $lastmod
     * @param  string     $changefreq
     * @param  float      $priority
     * @return $this
     */
    public function add($loc, $lastmod = null, $changefreq = null, $priority = null)
    {
        $loc = $this->escapeString($loc);
        $lastmod = $this->formatDate($lastmod);
        return $this->addUrlToDocument(compact('loc', 'lastmod', 'changefreq', 'priority'));
    }
}
